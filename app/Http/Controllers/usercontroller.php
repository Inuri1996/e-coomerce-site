<?php

namespace App\Http\Controllers;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

  class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
      //return $req->input();

     //return User::where(['email'=>$req->email])->first();
      //if
      $user= User::where(['email'=>$req->email])->first();
     // return $user->password;
      if(!$user || !Hash::check($req->password,$user->password))
      {
         return "user name or password not matched";
      }
      else
      {
        $req->session()->put('user',$user);
        return redirect('/');
      }
    }
}
