<?php

use App\Http\Controllers\Home\FrontController;
use App\Http\Controllers\User\CompanyController;
use App\Http\Controllers\User\UserCategoryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('frontpage.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');





Route::get('/logout', [FrontController::class, 'Logout'])->name('logout');

/// User Profile and Change Password
Route::prefix('home')->group(function(){

    Route::get('/', [FrontController::class, 'HomeView'])->name('home.view');
    Route::get('/about', [FrontController::class, 'AboutView'])->name('about.view');
    Route::get('/jobs', [FrontController::class, 'JobView'])->name('job.view');
    Route::get('/blog', [FrontController::class, 'BlogView'])->name('blog.view');
    Route::get('/contact', [FrontController::class, 'ContactView'])->name('contact.view');

    });


// Setup
Route::prefix('setup')->group(function(){
    Route::get('/user/category/view', [ UserCategoryController::class,'UserCatView'])->name('user.category.view');
    Route::get('/user/category/add', [ UserCategoryController::class,'UserCatAdd'])->name('user.category.add');
    Route::post('/user/category/store', [ UserCategoryController::class,'UserCatStore'])->name('user.category.store');
    Route::get('/user/category/edit/{id}', [ UserCategoryController::class,'UserCatEdit'])->name('user.category.edit');
    Route::post('/user/category/update/{id}', [ UserCategoryController::class,'UserCatUpdate'])->name('user.category.update');
    Route::get('/user/category/delete/{id}', [ UserCategoryController::class,'UserCatDelete'])->name('user.category.delete');
    Route::get('/users/view', [ UserController::class,'UserView'])->name('user.view');
    Route::get('/user/edit/{id}', [ UserController::class,'UserEdit'])->name('user.edit');

    // Companies
    Route::get('/companies/view', [ CompanyController::class,'CompanyView'])->name('companies.view');
    Route::get('/companies/add', [ CompanyController::class,'CompanyAdd'])->name('company.add');





});



Route::prefix('profile')->group(function(){
    Route::get('/view_profile', [ ProfileController::class,'ProfileView'])->name('view.profile');
    Route::get('/edit_profile', [ ProfileController::class,'ProfileEdit'])->name('edit.profile');
    Route::post('/update_profile/{id}', [ ProfileController::class,'ProfileUpdate'])->name('profile.update');
});



