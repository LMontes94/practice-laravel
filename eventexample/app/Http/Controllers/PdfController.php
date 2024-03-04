<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function download()
    {
        $data = "Nombre ";
        // $pdf = Pdf::loadView('pdf.example');
        $pdf = Pdf::setOption(['dpi' => 150, 'defaultFont' => 'arial'])->loadView('pdf.example', [
            'data' => $data
        ]);
        $pdf->save('/my_file.pdf'); //guardar en nuestro sistema
        return $pdf->download('my-example.pdf'); //descagar 
    }
}
