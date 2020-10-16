<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{

    public function index()
    {
        $assignments=Assignment::latest()->get();
        return view('blog',compact('assignments'));
    }

}
