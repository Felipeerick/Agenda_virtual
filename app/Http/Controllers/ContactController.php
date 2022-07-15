<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContactController extends Controller
{
    protected $contacts;
    protected $user;
    
    public function __construct(Contacts $contacts, User $user)
    {
      $this->contacts = $contacts;

      $this->user = $user;
    }

    public function index(Request $request)
    {
       $contactSeparate = Contacts::where('user_id', Auth::id())->paginate(5);
      
       return view('contact.index', compact('contactSeparate'));    
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
     
      $data['user_id'] = Auth::id();

      $this->contacts->create($data);

      return redirect()->route('contacts.index')->with('create', 'Adicionado com sucesso! :}');
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
                  if ($contacts->photo && Storage::exists($contacts->photo)){

                        Storage::delete($contacts->photo);
                  }

                  $data['photo'] = $request->photo->store('profile', 'public');
         }

           $data['is_admin'] = $request->admin?1:0;  

           $data['user_id'] = Auth::id();

           $contacts->update($data);

          return redirect()->route('contacts.index')->with('edit', 'Editado com sucesso! SZ');;
    }

     public function remove($id)
     {

      $contacts = $this->contacts->find($id);

      $contacts->delete();

      return redirect()->route('contacts.index')->with('remove', 'Removido com sucesso');
      
     }
}
