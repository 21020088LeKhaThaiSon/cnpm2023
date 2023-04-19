<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    //
    public function index(\App\Models\User $user)
    {   
        return view('profiles.profile_show',compact('user'));
    }

    public function edit(\App\Models\User $user){
        return view('profiles.profile_edit',compact('user'));
    }

    public function update(\App\Models\User $user) {
        $data = request()->validate([
            'fullname' => '',
            'birth' => '',
            'univer' => '',
            'gioi_tinh' => '',
            'description' => '',
            'bonus' => ''

        ]);

        if(is_null($user->profile)) {
            auth()->user()->profile()->create([
            'fullname' => $data['fullname'],
            'birth' => $data['birth'],
            'univer' => $data['univer'],
            'gioi_tinh' => $data['gioi_tinh'],
            'description' => $data['description'],
            'bonus' => $data['bonus']
            ]);

            return redirect("profile/{$user->id}");
        } else {
            $user->profile->update($data);

            return redirect("profile/{$user->id}");
        }
        
        
    }
}

