<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/users', function () {
//     return Inertia::render('Users');
// })->middleware(['auth', 'verified'])->name('users');

// Route::get('/documents', function () {
//     return Inertia::render('Documents');
// })->middleware(['auth', 'verified'])->name('documents');

Route::get('/inbox', function () {
    return Inertia::render('Inbox');
})->middleware(['auth', 'verified'])->name('inbox');

// Route::get('/projects', function () {
//     return Inertia::render('Projects/Index');
// })->middleware(['auth'])->name('projects');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/users', [UserController::class, 'index'])
->name('users');


Route::get('/documents', [DocumentController::class, 'index'])
->name('documents');

Route::get('/projects', [ProjectController::class, 'index'])
->name('projects');

Route::get('/project/create', [ProjectController::class, 'list'])
->name('project.create');



require __DIR__.'/auth.php';
