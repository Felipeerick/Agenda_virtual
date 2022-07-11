<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function store(Request $request)
    {
      $data = $request->all();
      $data['password'] = bcrypt($request->password);

            if($request->photo)
                {
                    $data['photo'] = $request->image->store('profile', 'public');
                }

      $this->model->create($data);

      return redirect()->route('users.index');
    }

    public function idGet($id)
    {
       $user = $this->user->find($id);

       return view('users.show', compact('user'));
    }
}
