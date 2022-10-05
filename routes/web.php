<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/about-us', [Controller::class, 'about'])->name('about');
Route::get('/contact-us', [Controller::class, 'contact'])->name('contact');
Route::get('/add/image', [Controller::class, 'add_image'])->name('add.image');
Route::post('/save/image', [Controller::class, 'saveImage'])->name('save.image');
