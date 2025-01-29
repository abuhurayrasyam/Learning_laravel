<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/response',[ResponseController::class, 'response']);

Route::get('/invoice/{invoiceID}',[InvoiceController::class, 'invoice']);


