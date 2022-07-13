<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commitments;
class CommitmentsController extends Controller
{

    public function __construct(Commitments $commitments)
    {
        $this->commitments = $commitments;
    }

    public function index()
    {    
        $commitments = $this->commitments->all();
           
        return view('Commitments.index' , compact('commitments'));
    }

    public function create()
    {
       return view('Commitments.create');
    }

    public function store(Request $request)
    {
        $commitments = $request->all();

        $this->commitments->create($commitments);

        return redirect()->route('commitments.index');
    }

    public function edit($id)
    {
        $commitments = $this->Commitments->find($id);

        return view('Commitments.edit', compact('commitments'));
    }

    public function update($id, Request $request)
    {
        $commitments = $this->commitments->find($id);
        $data = $request->all();

        $commitments->update($data);
    }

    public function remove($id)
    {
        $commmitments = $this->commitments->find($id);

        $this->commitments->delete($commmitments);
    }
}
