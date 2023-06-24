<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        if(auth()->user()) {
            return redirect('/myaccount');
        }

        return view('auth.register');
    }

    public function store(Request $req) {
        $this->validate($req, [
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            ]);

        User::create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'token_key' => Str::random(20),
        ]);

        return redirect('/');

    }
}
