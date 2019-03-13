<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function changePassword(Request $request){
        $user = User::find(1);
        $currentPassword = $request->get('password');
        $newPassword = $request->get('new_password');
        if(Hash::check($currentPassword, $user->password)){
            $user->password = Hash::make($newPassword);
            $user->save();
            return response()->json($user, 200);
        }else{
            return back();
        }
    }
}
