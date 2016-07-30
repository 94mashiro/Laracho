<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postUserSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request['email'];
        $password = $request['password'];
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('admin.gotoadmin');
        }
        return redirect()->back()->withErrors('Wrong Email Or Password');
    }
    public function postUserRegister(Request $request)
    {
        $email = $request['email'];
        $nickname = $request['nickname'];
        $password = bcrypt($request['password']);
        $user = new User();
        $user->email = $email;
        $user->nickname = $nickname;
        $user->password = $password;
        $user->save();
        return redirect()->back();
    }
}
