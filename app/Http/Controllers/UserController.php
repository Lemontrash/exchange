<?php

namespace App\Http\Controllers;

use App\AccountVerificationFiles;
use App\User;
use FontLib\EOT\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Svg\Tag\Image;

class UserController extends Controller
{
    public function store(Request $request){
//        dd($request);
        $id = Auth::id();
        $file_id =  $request->file('id_picture');
        $file_selfie = $request->file('selfie_picture');
        $file_bank = $request->file('bank_transfer') ;
        $file_dod = $request->file('dod') ;
//        dd($request);
        $name_id = 'id-'.$id.'.png';
        $name_selfie = 'selfie-'.$id.'.png';
        $name_bank = 'bank-'.$id.'.png';
        $name_dod = 'dod-'.$id.'.png';

        $path_id = Storage::putFileAs(
            'public', $file_id, $name_id
        );
        $path_selfie = Storage::putFileAs(
            'public', $file_selfie, $name_selfie
        );
        $path_bank = Storage::putFileAs(
            'public', $file_bank, $name_bank
        );
        $path_dod = Storage::putFileAs(
            'public', $file_dod, $name_dod
        );
        $file = AccountVerificationFiles::create([
            'user_id' => $id,
            'file_id' => $path_id,
            'selfie' => $path_selfie,
            'bank' => $path_bank,
            'dod' => $path_dod,
        ]);
        return back();
    }

    public function changePersonalInfo(Request $request){
        $email = $request->get('email');
        $firstName = $request->get('first_name');
        $lastName = $request->get('last_name');
        $month = $request->get('month');
        $date = $request->get('date');
        $year = $request->get('year');
        $country = $request->get('country');
        $city = $request->get('city');

        $fullDate = $date.'-'.$month.'-'.$year;
        $fullDate = \DateTime::createFromFormat('d-M-Y', $fullDate);
//        dd($fullDate);
        $user = User::where('id', Auth::id())->first();
        $user->email = $email;
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->dateOfBirth = $fullDate;
        $user->country = $country;
        $user->city = $city;
//        dd($user);
        $user->save();
        return back();
    }

}
