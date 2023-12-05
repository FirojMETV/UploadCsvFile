<?php

use App\Http\Controllers\CsvController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload',[CsvController::class,'showForm']);
Route::post('/upload',[CsvController::class,'upload'])->name('upload');
Route::get('/csv-data',[CsvController::class,'show'])->name('csv.show');
Route::get('/csvData',[CsvController::class,'PaginationData']);