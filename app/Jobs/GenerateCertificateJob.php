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

        

        // // path to store
        // $pathToImage = 'public/screenshot/';        
        $path = storage_path('app/screenshot/certificate.png');
        // Browsershot API
        $screenshot = Browsershot::url('http://127.0.0.1:8000/certificate')
             ->setScreenshotType('jpeg')
            ->windowSize(1200, 600)
            ->setOption('viewport.deviceScaleFactor', 2)
            ->waitUntilNetworkIdle()
            ->setDelay(1000)
            ->save($path);

        // // file nane to store
        // $fileNameToStore =  'certificate.jpeg';

        // Storage::put('public/screenshot/'.$fileNameToStore, $screenshot);

        // Browsershot::html('<h1>Hello world!!</h1>')->save('example.pdf');

        // return 'done';      
    } 


}
