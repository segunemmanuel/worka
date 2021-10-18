<?php

use App\Http\Controllers\Home\FrontController;
use Illuminate\Support\Facades\Route;
 

Route::get('/', function () {
    return view('backend.dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





/// User Profile and Change Password 
Route::prefix('home')->group(function(){

    // Route::get('/', [FrontController::class, 'HomeView'])->name('home.view');
    Route::get('/about', [FrontController::class, 'AboutView'])->name('about.view');
    Route::get('/jobs', [FrontController::class, 'JobView'])->name('job.view');
    Route::get('/blog', [FrontController::class, 'BlogView'])->name('blog.view');
    Route::get('/contact', [FrontController::class, 'ContactView'])->name('contact.view');




    
 
    
    }); 
    
