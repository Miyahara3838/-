<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FollowController;
use Illuminate\Support\Facades\Route;




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


Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/',[PostController::class,'index'])->name('index');
    Route::get('/posts/posted_creation' , [PostController::class,'posted_creation'])->name('posted_creation');
    Route::post('/posts', [PostController::class,'store'])->name('store');
    Route::get('/posts/{post}',[PostController::class,'show'])->name('show');
    Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/posts/{post}',[PostController::class,'delete'])->name('delete');
    
});

Route::get('/users',[ProfileController::class,'user'])->name('index');
// Route::post('/following',[FollowingController::class,'store']);
// Route::get('/users/following',[FollowingController::class,'following_index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
