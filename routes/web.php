<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    check_gate('manage-system');
    return redirect('super/dashboard');
})->name('dashboard');

Route::post('/logout', [AuthController::class, 'destroy'])
    ->name('logout');

//Route::group(['middleware' => ['auth','role:admin'], 'prefix' => 'admin', 'as' => 'admin.'],function (){
////    Route::group(['middleware' => 'role:admin'],function (){
//        Route::get('auth',function (){
//            if (\Illuminate\Support\Facades\Gate::denies('manage-system')){
//                abort(403);
//            }
//            return response(auth()->user());
//        });
////    });
//});
//Route::group(['middleware' => 'auth'],function (){
//    Route::group(['middleware' => 'role:users', 'prefix' => 'users', 'as' => 'users.'],function (){
//        Route::get('auth',function (){
////            if (\Illuminate\Support\Facades\Gate::denies('users')){
////                abort(403);
////            }
//            return response(auth()->user());
//        })->name('abdu');
//    });
//});
