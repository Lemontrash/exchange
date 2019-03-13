<?php

namespace App\Http\Controllers;

use App\AccountVerificationFiles;
use App\Files;
use App\Messages;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function showFilesQueue(){
        $files = Files::all();
        return view('admin.verificationQueue', ['files' => $files]);
    }

    public function downloadAccountVerificationFiles($id){
        $file = AccountVerificationFiles::find($id);
        $path_id = $file->file_id;
        $path_selfie = $file->selfie;
        $path_bank = $file->bank;
        $path_dod = $file->dod;

        Storage::download($path_bank);
        return Storage::download($path_dod);

    }

    public function approve($id){
        $file = Files::find($id);
        $file->approved = 'yes';
        $file->save();
        return back();
    }
    public function disapprove ($id){
        $file = Files::find($id);
        $file->approved = 'no';
        $file->save();
        return back();
    }
    public function delete ($id){
        $file = Files::find($id);
        $file->delete();
        return back();
    }
    public function getPdf($id){
        $file = Files::find($id);
        $data = [
            'country'           => $file->country,
            'citizenship'       => $file->citizenship,
            'placeOfBirth'      => $file->placeOfBirth,
            'address'           => $file->address,
            'landLine'          => $file->landLine,
            'city'              => $file->city,
            'zip'               => $file->zip,
            'employment'        => $file->employment,
            'industry'          => $file->industry,
            'annualIncome'      => $file->annualIncome,
            'savings'           => $file->savings,
            'sourceOfFunds'     => $file->sourceOfFunds,
            'investAnnually'    => $file->investAnnually,
            'nameOfBank'        => $file->nameOfBank,
            'taxId'             => $file->taxId,
            'countryTaxes'      => $file->countryTaxes,
        ];
        $pdf = Facade::loadView('pdfmaked', $data);

        return $pdf->stream();
    }

    public function showMessages(){
        $messages = Messages::all();
        return view('admin.messages', ['messages' => $messages]);
    }
    public function showMembers(){
        $members = User::all();
        return view('admin.members', ['members' => $members]);
    }

    public function showAccountVerifictionFiles(){
        $files = AccountVerificationFiles::all();
        return view('admin.accountVerificationFiles', ['files' => $files]);
    }


}
