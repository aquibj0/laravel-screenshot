<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/generate-certificate', [CertificateGeneratorController::class, 'create']);
// Route::get('/generate-pdf', [CertificateGeneratorController::class, 'generatePDF']);

Route::get('email', function(){
    return view('email.ceertificate');
});
Route::get('testpdf', function(){
    return view('testPDF');
});

Route::get('/certificate/{id}', [CertificateGeneratorController::class, 'show']);
