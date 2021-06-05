<?php

use App\Http\Controllers\generaBD;
use App\Http\Controllers\inicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowEmpleos;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');
*/


Route::get('/',ShowEmpleos::class);
/*
Route::get('/dashboard', ShowEmpleos::class)->name('dashboard');
*/

/*
Route::get('/dashboard',[generaBD::class, 'genera'] )->name('dashboard2');
*/

