<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\PelangganController;

Route::get('/produk',[ProdukController::class,'index']);


Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/{id}',[PelangganController::class,'show']);
Route::post('/pelanggan',[PelangganController::class,'store']);
Route::put('/pelanggan/{id}',[PelangganController::class,'update']);
Route::delete('/pelanggan/{id}',[PelangganController::class,'destroy']);