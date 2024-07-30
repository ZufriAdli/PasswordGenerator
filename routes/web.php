<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordGeneratorController;

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

// Redirect root URL to the password form
Route::get('/', function () {
    return redirect()->route('password.form');
});

// Route to display the password form
Route::get('/password-form', [PasswordGeneratorController::class, 'showForm'])->name('password.form');

// Route to handle password generation
Route::post('/generate-password', [PasswordGeneratorController::class, 'generate'])->name('password.generate');
