<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commitments;
use Illuminate\Support\Facades\Auth;
class CommitmentsController extends Controller
{
    public function __construct(Commitments $commitments)
    {
        $this->commitments = $commitments;
    }

    public function index()
    {    
        $paginate = $this->commitments->paginate(8);
           
        $user_id = Auth::id();
        
        $commitmentsSeparate = Commitments::where('user_id', $user_id)->get();

        return view('Commitments.index' , compact('paginate', 'commitmentsSeparate'));
    }

    public function create()
    {
       return view('Commitments.create');
    }

    public function store(Request $request)
    {
        $commitments = $request->all();

        $commitments['user_id'] = Auth::id();

        $this->commitments->create($commitments);

        return redirect()->route('commitments.index');
    }

    public function edit($id)
    {
        $commitments = $this->commitments->find($id);

        return view('Commitments.edit', compact('commitments'));
    }

    public function update($id, Request $request)
    {
        $commitments = $this->commitments->find($id);
        $data = $request->all();

        $data['user_id'] = Auth::id();

        $commitments->update($data);

        return redirect()->route('commitments.index');
    }

    public function remove($id)
    {
        $commitments = $this->commitments->find($id);

        $commitments->delete();

        return redirect()->route('commitments.index');
    }
}
