<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyaccountController extends Controller
{
    public function index() {

        if(!auth()->user()) {
            return redirect('/');
        }

        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        $token_key = $user->token_key;

        return view('myaccount', [
            'token_key' => $token_key,
        ]);
    }
}
