<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generate(Request $request){
        $firstname = $request->get('first-name');
        $secondname = $request->get('second-name');
        $lastname = $request->get('last-name');
        $countrytname = $request->get('country-of-residence');
        $cityzenship = $request->get('Citizenship');
        $plasceofbirth = $request->get('place-of-birth');
        $data = [
            'firstname'  => $firstname,
            'secondname' => $secondname,
            'lastname' => $lastname,
            'countrytname' => $countrytname,
            'cityzenship' => $cityzenship,
            'plasceofbirth' => $plasceofbirth,
        ];
        $pdf = Facade::loadView('pdfmaked', $data);
        return $pdf->stream();
    }

//    public function makeView(Request $request){
//
//        $firstname = $request->get('first-name');
//        $secondname = $request->get('second-name');
//        $lastname = $request->get('last-name');
//        $countrytname = $request->get('country-of-residence');
//        $cityzenship = $request->get('Citizenship');
//        $plasceofbirth = $request->get('place-of-birth');
//
//
//        return view('pdfmaked', [
//            'firstname'  => $firstname,
//            'secondname' => $secondname,
//            'lastname' => $lastname,
//            'countrytname' => $countrytname,
//            'cityzenship' => $cityzenship,
//            'plasceofbirth' => $plasceofbirth,
//        ]);
//
//    }

    public function show(){
        return view('pdf');
    }
}
