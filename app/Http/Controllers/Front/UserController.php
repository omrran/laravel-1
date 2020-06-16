<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('showAdminAge');
    }

    public function showAdminName(){

        return '<h1>omraaaaaaaaaaaaaaan</h1>';
    }

    public function showAdminAge(){

        return '<h1>you from showAdminAge</h1>';
    }
}
