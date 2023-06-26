<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GetcompaniesController extends Controller
{
    function get_companies( $token = null ) {
        if( $token ) {
            $token_exists = DB::table('users')->where('token_key', $token)->first();

            return $token_exists ? DB::table('testcompanies')->get() :"Wrong api key";
        }
        else {
            return "No api key";
        }

    }
}
