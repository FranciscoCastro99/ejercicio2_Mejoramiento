<?php

use App\Http\Controllers\OriginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('origin/listar',[OriginController::class,'index'])->name('origin.index');
Route::get('origin/create',[OriginController::class,'create'])->name('origin.create');
Route::post('origin/store',[OriginController::class,'store'])->name('origin.store');
Route::get('origin/{origins}',[OriginController::class,'show'])->name('origin.show');
Route::put('origin/{origins}',[OriginController::class,'update'])->name('origin.update');
Route::delete('origin/{origins}',[OriginController::class,'destroy'])->name('origin.destroy');
Route::get('origin/{origins}/editar',[OriginController::class,'edit'])->name('origin.edit');
