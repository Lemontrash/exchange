<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function changePassword(Request $request){
        $user = User::find(Auth::id());
        $currentPassword = $request->get('passwordOld');
        $newPassword = $request->get('passwordNew');

        if(Hash::check($currentPassword, $user->password)){
            $user->password = Hash::make($newPassword);
            $user->save();
            return view('home');
        }else{
            return back();
        }
    }
}
