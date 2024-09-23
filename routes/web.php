<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){

    
    Route::view("/", "welcome")->name("home");  
    
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });





// Route::view("/", "welcome")->name("home"); 

Route::get("/login", [AuthController::class,"login"])
->name("login");
Route::post("/login", [AuthController::class,"loginPost"])
->name("login.post");

Route::get("/register", [AuthController::class,"register"])
->name("register");
Route::post("/register", [AuthController::class,"registerPost"])
->name("register.post");

Route::get('/client', [ClientController::class, 'index'])->name('client')->middleware('auth');
Route::get('/show/client', [ClientController::class, 'show'])->middleware('auth');
Route::get('/edit/client/{id}', [ClientController::class, 'edit'])->middleware('auth');
Route::get('/delete/{id}', [ClientController::class, 'destroy'])->middleware('auth');
Route::post('/client/submit', [ClientController::class, 'create'])->middleware('auth');
Route::post('/client/update/', [ClientController::class, 'update'])->middleware('auth');
Route::get('/logout', [ClientController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// require __DIR__.'/auth.php';