<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('auth',function (){
    check_gate('manage-system');
    return response(auth()->user());
})->name('auth');

Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('settings',[SettingController::class,'setting'])->name('settings');
Route::post('settings',[SettingController::class,'setting_save']);
