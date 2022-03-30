<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $usertable = User::where(['email'=>$req->email])->first();
        if(!$usertable || !Hash::check($req->password,$usertable->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$usertable);
            return redirect('/');
        }
    }
}
