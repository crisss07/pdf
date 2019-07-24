<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Persona;

class PDFController extends Controller
{
    
    public function htmlPDF55()
    {
    	
    	    	
    	 return view('htmlPDF');
    }
 

    public function htmlPDF58()
    {
    	
    	    	
    	$persona = Persona::find('1');
    	$pdf = PDF::loadView('htmlPDF', compact('persona'))->setPaper('a4', 'landscape');
  
        return $pdf->download('prueba.pdf');
    }
 
    public function generatePDF58()
    {
    	$prueba = 'Cristian Rodrigo Chamby Salinas';
        $data = ['title' => 'PDF'];
        $pdf = PDF::loadView('htmlPDF', $data);
        return $pdf->download('demonutslaravel.pdf');
    }

}
