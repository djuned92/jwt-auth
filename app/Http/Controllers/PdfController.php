<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
    	$data['name'] = [
    		'Ahmad Djunaedi','Widya Ariyani'
    	];
    	$pdf = PDF::loadView('example-pdf',$data);
    	return $pdf->stream('example.pdf');
    }
}
