<?php

use App\Http\Controllers\Home\FrontController;
use Illuminate\Support\Facades\Route;
 

// Route::get('/', function () {
//     return view('frontpage.single_job');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





/// User Profile and Change Password 
Route::prefix('home')->group(function(){

    Route::get('/', [FrontController::class, 'HomeView'])->name('home.view');
    
 
    
    }); 
    
