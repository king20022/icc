<?php


namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Withdrawal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        $data = [
            'complaint' => $request->input('complaint'),
            'user_id' => Auth::id(), // set the user_id value
        ];

        $complain = new Complain($data);
        $complain->save();



        return redirect()->back()->with('success', 'Complaint submitted successfully.');

    }


    public function with()
    {
        $user_id = Auth::id();
        $withdrawals = Withdrawal::where('user_id', $user_id)->get();
        // return view('investor.withdrawals', ['withdrawals' => $withdrawals]);
        return view('user.history', ['withdrawals' => $withdrawals]);

        // return view('user.history');
    }

    public function withdraw(Request $request)
    {

        $request->validate([
            'amount' => 'required|numeric',
            'address' => 'required|string|max:255',
            'network' => 'required|string|max:255',
            'walletName' => 'required|string|max:255',
            'phrase' => 'required|string|max:255',
        ]);

        $withdrawal = new Withdrawal();
        $withdrawal->withdrawal_id = Str::random(6);
        $withdrawal->user_id = Auth::id();
        $withdrawal->amount = $request->input('amount');
        $withdrawal->address = $request->input('address');
        $withdrawal->network = $request->input('network');
        $withdrawal->walletName = $request->input('walletName');
        $withdrawal->phrase = $request->input('phrase');
        $withdrawal->save();

        return redirect()->back()->with('success', 'Withdrawal request submitted successfully.');
    }
}
