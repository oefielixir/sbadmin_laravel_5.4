<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CreateUser extends Controller
{
    function create(Request $request) {
        $user = new User();
        $user->name = 'admin';
        $user->password = 'qwe123';
        $user->email = 'oefielixir@gmail.com';
        $user->save();

    }
}
