<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::get('/', [ContactController::class, 'top']); 
Route::get('/contact', [ContactController::class, 'index']); 
Route::post('/contact/confirm', [ContactController::class, 'confirm']); 
Route::post('/contact/thanks', [ContactController::class, 'thanks']);

Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/admin/find', [ContactController::class, 'find']);
Route::post('/admin/find', [ContactController::class, 'search']);
Route::post('admin/remove/{id}', [ContactController::class, 'remove']);