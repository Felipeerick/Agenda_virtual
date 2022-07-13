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
        $contacts = $this->commitments->all();
           
        return view('Commitments.index' , compact('contacts'));
    }

    public function create()
    {
       return view('Commitments.create');
    }

    public function store(Request $request)
    {
        $contacts = $request->all();

        $this->commitments->create($contacts);

        return redirect()->route('commitments.index');
    }
}
