<?php

namespace App\Http\Controllers;

use App\Files;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showHome(){
        return view('welcome');
    }
    public function showPasswordResetViaEmail(){
        return view('auth.retrieveEmail');
    }
    public function showProfileSettings(){
        return view('profileSettings');
    }
    public function showFaq(){
        return view('profileFaq');
    }
    public function showUploadFiles(){
        return view('uploadFiles');
    }
    public function showDeposit(){
        return view('profileExchange');
    }
    public function showPersonalDataVerify(){
        return view('personalDataVerify');
    }
    public function showFilesHistory(){
        if (User::find(Auth::id())->role == 'individual'){
            $files = Files::where('user_id', Auth::id())->get();
        }
        elseif (User::find(Auth::id())->role == 'business'){
            $files = Files::where('user_id', Auth::id())->get();
            $individuals = User::where('relation_id', Auth::id())->get();
            foreach ($individuals as $user){
                $fileCollection = Files::where('user_id', $user->id)->get();
                foreach ($fileCollection as $item) {
                    $files[] = $item;
                }
            }
        }
//        dd($files);
        return view('profileFilesHistory', ['files' => $files]);


    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect('login');
    }
    public function showContactUsForm(){
        return view('profileContactUs');
    }


}
