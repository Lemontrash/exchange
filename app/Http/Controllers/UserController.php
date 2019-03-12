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
        $file_id =  $request->file('id');
        $file_selfie = $request->file('selfie');
        $file_bank = $request->file('bank') ;
        $file_dod = $request->file('dod') ;

        $path_id = Storage::putFileAs(
            'authFiles', $file_id, 'id-'.$id.'.'.$file_id->extension()
        );
        $path_selfie = Storage::putFileAs(
            'authFiles', $file_selfie, 'selfie-'.$id.'.'.$file_selfie->extension()
        );
        $path_bank = Storage::putFileAs(
            'authFiles', $file_bank, 'bank-'.$id.'.'.$file_bank->extension()
        );
        $path_dod = Storage::putFileAs(
            'authFiles', $file_dod, 'dod-'.$id.'.'.$file_dod->extension()
        );
        AccountVerificationFiles::create([
            'user_id' => $id,
            'file_id' => $path_id,
            'selfie' => $path_selfie,
            'bank' => $path_bank,
            'dod' => $path_dod,

        ]);
        return back();
    }
}
