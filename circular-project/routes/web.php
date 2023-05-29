<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DefinitionController;

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

Route::get('/', [HomepageController::class, 'show'])->name('home');

Route::get('/what', [DefinitionController::class, 'show'])->name('what');

Route::get('/circular', function () {
    return view('circularwhat.show', [
        'circular' => '<h1>Circular</h1>'
    ]);
});
