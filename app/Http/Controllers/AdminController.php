<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function getuser()
    {
        // Retrieve users with the "user" role
        $users = User::where('role', 'user')->get();

        // Pass the users to the view using compact function
        return view('admin.board', compact('users'));
    }


    public function edit()
    {




        $user = User::all();


        return view('admin.complain', compact('user'));

        // // Pass the complains data to the view
        // return view('',compact('complains'));
    }
}
