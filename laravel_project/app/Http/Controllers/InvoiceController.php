<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request, $invoiceID){
        if ($request->has('download')){
            $type = $request->input('download');
            return response("Downloading {$type} Invoice with ID: {$invoiceID}");
        } //http://127.0.0.1:8000/invoice/1?download=PDF
        return response("Displaying Invoice with ID: {$invoiceID}"); //http://127.0.0.1:8000/invoice/1
    }
}
