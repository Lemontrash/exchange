<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessageForm(){
        return view('contactUs');
    }

    public function send(Request $request){
//        dd($request);
        $message = Messages::create([
            'email'     => $request->get('email'),
            'name'      => $request->get('name'),
            'title'     => $request->get('title'),
            'phone'     => $request->get('phone'),
            'message'   => $request->get('message'),
        ]);
        return response()->json($message);
    }



    public function delete($id){

    }
}
