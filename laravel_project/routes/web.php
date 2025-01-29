<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return view('welcome');
});
//Response
Route::get('/response',[ResponseController::class, 'response']);

//Request
Route::get('/request/method',[RequestController::class, 'requestMethod']);
Route::post('/request/method',[RequestController::class, 'requestMethod']);
Route::put('/request/method',[RequestController::class, 'requestMethod']);
Route::patch('/request/method',[RequestController::class, 'requestMethod']);
Route::delete('/request/method',[RequestController::class, 'requestMethod']);
Route::match(['get', 'head'], '/request/method',[RequestController::class, 'requestMethod']);;
Route::options('/request/method',[RequestController::class, 'requestMethod']);

Route::get('/request/querystring',[RequestController::class, 'requestQueryString']);

Route::get('/request/parameter/{name}/{city}',[RequestController::class, 'requestParameter']);

Route::get('/request/jsonbody',[RequestController::class, 'requestJsonBody']);

Route::get('/request/header',[RequestController::class, 'requestHeader']);

Route::post('/request/formdata/find',[RequestController::class, 'requestFormDataFind']);

Route::post('/request/formdata/upload',[RequestController::class, 'requestFormDataUpload']);

Route::post('/request/ipaddress/catch',[RequestController::class, 'requestIpAddressCatch']);

//Invoice
Route::get('/invoice/{invoiceID}',[InvoiceController::class, 'invoice']);


