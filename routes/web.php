<?php

use App\Http\Controllers\ControllerEstudiante;
use App\Mail\enviarCorreo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControllerEstudiante::class, "index"])->name("crud.index");
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pdf', [ControllerEstudiante::class, 'pdf'])->name("pdf");

Route::get('/correo', [ControllerEstudiante::class, 'correo'])->name("correo");

Route::resource('/estudiante', ControllerEstudiante::class); 