<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Withdrawal;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function getuser()
    {
        // Retrieve users with the "user" role
        $users = User::where('role', 'user')->with('complains')->get();




        // Pass the users to the view using compact function
        return view('admin.board', compact('users'));
    }


    public function edit($id)
    {


        $user = User::findOrFail($id);

        $complains = $user->complains;
        return view('admin.complain', compact('user', 'complains'));
    }

    public function recover(Request $request, $id)
    {


        $user = User::findOrFail($id);

        // $request->validate([
        //     'profit' => 'required|numeric',
        // ]);

        $user->profit = $request->profit;
        $user->save();


        return redirect()->back()->with('success', 'Investor details updated successfully.');
    }


    public function history()
    {

        $withdrawals = Withdrawal::with('user')->get();
        return view('admin.track', compact('withdrawals'));


    }




    public function admin(Request $request, $id)
    {
        $withdrawal = Withdrawal::find($id);
        $withdrawal->status = $request->input('status');
        $withdrawal->save();
        return redirect()->back()->with('success', 'Investor details updated successfully.');


    }
}
