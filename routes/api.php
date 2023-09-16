<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//1:1
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);

Route::get('/addresses', [AddressesController::class, 'index']);
Route::get('/addresses/{id}', [AddressesController::class, 'findOne']);
Route::post('/addresses/create', [AddressesController::class, 'create']);

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/invoice/create', [InvoiceController::class, 'create']);
Route::get('/invoice/{id}', [InvoiceController::class, 'findOne']);
