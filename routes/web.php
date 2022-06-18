<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect('/cards/list');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cards/list' , [CardController::class , 'index']);
Route::get('/cards/detail/{id}' , [CardController::class , 'show']);

Route::middleware('isUserAuth')->group(function(){
    Route::post('/cards/store' , [CardController::class , 'store']);
    Route::post('/cards/update/{id}' , [CardController::class , 'update']);
    Route::get('/cards/create' , [CardController::class , 'create']);
    Route::get('/cards/delete/{id}' , [CardController::class , 'destroy']);
    Route::get('/cards/edit/{id}' , [CardController::class , 'edit']);
});

Route::get('/auth' , function(Request $request){
       return Auth::check();
});

require __DIR__.'/auth.php';
