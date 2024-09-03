<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function showCreateNewUserForm()
    {
        return view('create_user');
    }

    public function storeUserData(Request $req)
    {
        return $req;
    }
}
