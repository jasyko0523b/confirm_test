<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ManagementController;

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

Route::get('/', [InquiryController::class, 'index']);
Route::post('/confirm', [InquiryController::class, 'confirm']);
Route::post('/thanks', [InquiryController::class, 'thanks']);

Route::get('/management', [ManagementController::class, 'index']);
Route::delete('/management/delete', [ManagementController::class, 'delete']);
Route::get('/management/search', [ManagementController::class, 'search']);
