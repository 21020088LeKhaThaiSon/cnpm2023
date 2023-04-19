<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    //
    public function index(\App\Models\User $user){
        return view('test',compact('user'));
    }
}
