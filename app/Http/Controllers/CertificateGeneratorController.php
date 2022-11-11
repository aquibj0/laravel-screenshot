<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Storage;
use App\Jobs\GenerateCertificateJob;
use PDF;
use App\Models\StudentDetails;

class CertificateGeneratorController extends Controller
{

    public function create(){

        $students = StudentDetails::take(2)->get();

        foreach($students as $student){

            GenerateCertificateJob::dispatch($student)->delay(now());
        }

        
        return 'Job added to queue';

    }
    
    public function show($id){
        $student = StudentDetails::where('id', $id)->first();
        return view('certificate', compact('student'));
    }

    public function generatePDF(){
        $student = StudentDetails::where('id', $id)->first();

        $data = [
            'certificate_path' => $student['certificate_link'],
        ];

        $pdf = PDF::loadView('testPDF', $data)->setPaper('a4','landscape')->setWarnings(false);
     
        return $pdf->download(Str::slug($student['name']).'_certificate.pdf');
    }
}
