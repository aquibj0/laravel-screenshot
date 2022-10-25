<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Storage;
use App\Jobs\GenerateCertificateJob;

class CertificateGeneratorController extends Controller
{

    public function create(){
       
        // // return $pdf;
        GenerateCertificateJob::dispatch()->delay(addSeconds(2));

        return 'Job added to queue';
        
        // $path = storage_path('app/screenshot/certificate.png');

        // $screenshot = Browsershot::url('https:fueler.io')
        //     ->save($path);
    }

}
