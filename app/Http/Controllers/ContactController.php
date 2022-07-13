<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    protected $contacts;

    public function __construct(Contacts $contacts)
    {
      $this->contacts = $contacts;
    }
    public function index()
    {
       $contacts =  $this->contacts ->all();

       return view('contact.index', compact('contacts'));    
    }

    public function create()
    {
       return view('contact.create');    
    }

    public function store(Request $request)
    {
      $data = $request->all();
      $data['password'] = bcrypt($request->password);

            if($request->photo)
                {
                    $data['photo'] = $request->photo->store('profile', 'public');
                }

                $this->contacts ->create($data);

      return redirect()->route('contacts.index');
    }

    public function show($id)
    {
       $contacts =  $this->contacts ->find($id);

       return view('contact.show', compact('contacts'));
    }

    public function edit($id)
    {
       $contacts =  $this->contacts ->find($id);
      
       $title = 'Usuário '. $contacts->name;

       return view('contact.edit', compact('contacts', 'title'));
    }

    public function update(Request $request, $id)
    {
      if (!$contacts =  $this->contacts ->find($id))
          return redirect()->route('contacts.index');

        $data = $request->all();


         if ($request->password)
               $data['password'] = bcrypt($request->password);


         if ($request->photo)
         {
                  if ($contacts->photo && Storage::exists($contacts->photo))
                  {
                        Storage::delete($contacts->photo);
                  }

                  $data['photo'] = $request->photo->store('profile', 'public');
         }

           $data['is_admin'] = $request->admin?1:0;  

             $contacts->update($data);

            return redirect()->route('contacts.index');
    }


     public function remove($id)
     {
      $contacts = $this->contacts->find($id);

      $this->contacts->delete($contacts);

      return redirect()->route('contacts.index');
     }
}
