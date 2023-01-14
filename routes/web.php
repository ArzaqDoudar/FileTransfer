<?php

use App\Http\Controllers\UploadFileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('upload');
});
// Route::get('/show', function () {
//     return view('show');
// });
Route::get('/',[UploadFileController::class,'upload'])->name('upload');
Route::get('/show',[UploadFileController::class,'show'])->name('show');
Route::post('/addFile',[UploadFileController::class,'store'])->name('addFile');
Route::get('/file/{id}', [UploadFileController::class , 'destroy'])->name('file.destroy');
Route::get('/{linkCode}',[UploadFileController::class,'code'])->name('linkCode');
Route::get('file/download/{file}',[UploadFileController::class,'download'])->name('file.download');