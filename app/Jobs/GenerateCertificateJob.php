<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Browsershot\Browsershot;
use Storage;
use Illuminate\Support\Str;
use Dompdf\Dompdf;
use App\Models\StudentDetails;
use Mail;
use App\Mail\SendCertificate;

class GenerateCertificateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */


    public $student;

    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // // Browsershot API
        // $screenshot = Browsershot::url('http://127.0.0.1:8000/certificate/'.$this->student->id)
        //     ->setScreenshotType('png')
        //     ->windowSize(1920, 1080)
        //     ->select('.cert-body')
        //     ->setOption('viewport.deviceScaleFactor', 3)
        //     ->waitUntilNetworkIdle()
        //     ->setDelay(1000)
        //     ->screenshot();

        // // file nane to store
        // $fileNameToStore =  Str::slug($this->student->name).'-'.$this->student->id.'-msspttc-webinar-certificate.png';

        // // path to store
        // $pathToStore = 'aquibj0/certificate/';

        // // Save image to local disk
        // Storage::put('public/screenshot/'.$fileNameToStore, $screenshot);     

        // Store the uploaded file on Cloudinary

        // $uploadedFileUrl = cloudinary()->upload('http://127.0.0.1:8000/storage/screenshot/'.$fileNameToStore)->getSecurePath();

         // Store screenshot to S3 bucket. 
        // Storage::disk('s3')->put($pathToStore.$fileNameToStore, $screenshot);

        // // path to image
        // $urlPath = Storage::disk('s3')->url($pathToStore.$fileNameToStore);

        // //  Update the data with certificate link
        // $student = StudentDetails::where('id', $this->student->id)->first();

        // $student->certificate_link = $urlPath;

        // $student->update();

        Mail::to('aquib.jwd02@gmail.com')->send(new SendCertificate($this->student)); 

        // Send email to releveant user with the certificate_link

    } 


}
