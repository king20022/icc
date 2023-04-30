<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function create()
    {
        return view('welcome');
    }



    // public function index()
    // {
    //     if (Auth::user()->role == 'admin') {
    //         return redirect()->route('board');
    //     } else if (Auth::user()->role == 'user') {
    //         return view('user.dashboard');
    //     }
    // }

    public function index()
    {
        $user = auth()->user();

        if ($user->role == 'admin') {
            return view('board');
        } else if ($user->role == 'user') {
            return view('user.dashboard', ['user' => $user]);
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }
}
