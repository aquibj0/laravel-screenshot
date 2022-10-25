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

use Dompdf\Dompdf;


class GenerateCertificateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Browsershot API
        $screenshot = Browsershot::url('http://127.0.0.1:8000/certificate')
            ->setScreenshotType('png')
            ->windowSize(1920, 1080)
            ->select('.cert-body')
            ->setOption('viewport.deviceScaleFactor', 3)
            ->waitUntilNetworkIdle()
            ->setDelay(1000)
            ->screenshot();

        // // file nane to store
        $fileNameToStore =  'cert.png';

        Storage::put('public/screenshot/'.$fileNameToStore, $screenshot);           
    } 


}
