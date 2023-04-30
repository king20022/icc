<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
    {

        return view('user.contact');
    }



    public function submit(Request $request)
    {


        $request->validate([


            'complaint' => 'required|string|max:255'

        ]);

        $complain = new Complain();
        // $complain->user_id = Auth::id();
        $complain->complaint = $request->input('complaint');
        $complain->save();



        return redirect()->back()->with('success', 'Investor details updated successfully.');

    }


    public function with()
    {

        return view('user.history');
    }
}
