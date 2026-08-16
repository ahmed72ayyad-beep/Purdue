<?php

use App\Http\Controllers\purdueController;
use Illuminate\Support\Facades\Route;

Route::get('/', [purdueController::class, 'index'])->name('Home');
// Route::get('/Home2', [purdueController::class, 'index2'])->name('Home2');
Route::name('Home.')->prefix('')->group(function () {
    Route::get('/About', [purdueController::class, 'About'])->name('About');
    // Route::name('Courses.')->prefix('Courses/')->group(function () {
    // Route::get('/',[purdueController::class,'Courses'])
    // Route::get('/Course{id}', [purdueController::class, 'Course'])->name('Course' . '$id');
    // Route::get('/Course{id}/Detail', [purdueController::class, 'CourseDetail'])->name('Course' . '$id' . "Detail");
    Route::get('/Courses1/{id?}', [purdueController::class, 'Courses1'])->name('Courses1');
    Route::get('/Courses2/{id?}', [purdueController::class, 'Courses2'])->name('Courses2');
    Route::get('/Courses3/{id?}', [purdueController::class, 'Courses3'])->name('Courses3');
    // });


    // Route::name('Pages.')->prefix('Pages/')->group(function () {
    Route::get('Instractors/{id?}', [purdueController::class, 'Instractors'])->name('Instractors');
    Route::get('Events/{id?}', [purdueController::class, 'Events'])->name('Events');
    Route::get('Pricing', [purdueController::class, 'Pricing'])->name('Pricing');
    Route::get('FAQ', [purdueController::class, 'FAQ'])->name('FAQ');
    Route::get('Login', [purdueController::class, 'Login'])->name('Login');
    Route::post('Login', [purdueController::class, 'Login_data']);
    Route::get('Register', [purdueController::class, 'Register'])->name('Register');
    Route::post('Register', [purdueController::class, 'Register_data']);
    // });



    Route::name('Shop.')->prefix('Shop/')->group(function () {
    Route::get('/Cart', [purdueController::class, 'Cart'])->name("Cart");
    Route::get('/Checkout', [purdueController::class, 'Checkout'])->name("Checkout");
    Route::post('/Checkout', [purdueController::class, 'Checkout_data']);
    });
    Route::get('Shop/{id?}', [purdueController::class, 'Shop'])->name("Shop");



    Route::get('/Blog/{id?}', [purdueController::class, 'Blog'])->name('Blog');
    Route::get('/Contact', [purdueController::class, 'Contact'])->name('Contact');
    Route::post('/Contact', [purdueController::class, 'Contact_data']);
    Route::post('/subscribe', [purdueController::class, 'subscribe_data'])->name('subscribe');
});
// Route::fallback(function () {
//     return redirect('/Home');
// });
