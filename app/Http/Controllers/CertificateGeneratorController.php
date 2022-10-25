<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Storage;
use App\Jobs\GenerateCertificateJob;
use PDF;

class CertificateGeneratorController extends Controller
{

    public function create(){
        
        GenerateCertificateJob::dispatch()->delay(now());
        
        return 'Job added to queue';

    }
    

    // public function generatePDF(){
    //     $data = [
    //         'name' => 'Aquib Jawed',
    //     ];
           
    //     $pdf = PDF::loadView('testPDF', $data);
     
    //     return $pdf->download('certificate.pdf');
    // }
}
