<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/2', [PostController::class, 'index2'])->name('index2');
    Route::post('/posts',  [PostController::class, 'store']);
    Route::get('/posts/create',  [PostController::class, 'create'])->name('create');
    Route::get('/posts/{post}',  [PostController::class, 'show']);
    Route::get('/posts2/{receiver}',  [PostController::class, 'show2']);
    Route::put('/posts/{post}',  [PostController::class, 'update']);
    Route::delete('/posts/{post}',  [PostController::class, 'delete']);
    Route::get('/posts/{post}/edit',  [PostController::class, 'edit']);
});
require __DIR__.'/auth.php';
