<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct(User $user)
    {
      $this->user = $user;
    }
    public function index()
    {
       $users = $this->user->all();

       return view('users.index', compact('users'));    
    }

    public function create()
    {
       return view('users.create');    
    }

    public function login()
    {
       return view('users.login');
    }

    public function store(Request $request)
    {
      $data = $request->all();
      $data['password'] = bcrypt($request->password);

            if($request->photo)
                {
                    $data['photo'] = $request->photo->store('profile', 'public');
                }

      $this->user->create($data);

      return redirect()->route('users.index');
    }

    public function idGet($id)
    {
       $user = $this->user->find($id);

       return view('users.show', compact('user'));
    }

    public function edit($id)
    {
       $user = $this->user->find($id);
      
       $title = 'Usuário '. $user->name;

       return view('users.edit', compact('user', 'title'));
    }

    public function update(Request $request, $id)
    {
      if (!$user = $this->user->find($id))
          return redirect()->route('users.index');

        $data = $request->all();


         if ($request->password)
               $data['password'] = bcrypt($request->password);


         if ($request->photo)
         {
                  if ($user->photo && Storage::exists($user->photo))
                  {
                        Storage::delete($user->photo);
                  }

                  $data['photo'] = $request->photo->store('profile', 'public');
         }

           $data['is_admin'] = $request->admin?1:0;  

             $user->update($data);

            return redirect()->route('users.index');
    }


     public function remove($id)
     {
      $user = $this->user->find($id);

      $user->delete();

      return redirect()->route('users.index');
     }
}
