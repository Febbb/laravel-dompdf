<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class pdfController extends Controller
{
    // running pdf machine
	public function makePDF(){
		$dompdf = new Dompdf();

		$html = '
				<h1> TESTING DOMPDF <h1>
		' ;
		$dompdf->loadHTML($html);
		$dompdf->setPaper('A4','potrait');
		$dompdf->render();
		$dompdf->stream('testing-dompdf');

	}

}
