<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\QuizzController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/portfolio/home', function () {
    return Inertia::render('Portfolio/Home');
})->middleware(['auth', 'verified'])->name('portfolio');

require __DIR__.'/auth.php';

// Route::get('/users', function () {
//     return Inertia::render('Users/Index');
// })->middleware(['auth', 'verified'])->name('users.index');

// require __DIR__.'/auth.php';

Route::resource('/users', UserController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';;

Route::resource('/notes', NoteController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';;

Route::resource('/quizzs', QuizzController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';;
