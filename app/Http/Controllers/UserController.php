<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function showCreateNewUserForm()
    {
        return view('create_user');
    }

    public function storeUserData(Request $req)
    {
        // return $req->input('email');
        // return $req;
        //
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);
        $userModel = new User();
        $userModel->name = $req->name;
        $userModel->email = $req->email;
        $userModel->password = $req->password;
        $userModel->save();

        // return redirect()->back()->with('success', "New user successfully created");
        return redirect(route('show_users'))->with('success', "New user successfully created");

    }

    public function showUsers()
    {
        return view('show_users', [
            'users' => User::latest()->get()
        ]);
    }

    public function deletedUser(User $user)
    {
        // return $user;
        $user->delete();
        return redirect()->back()->with('success', "User has been successfully deleted");

    }
}
