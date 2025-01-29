<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    function requestMethod(Request $request){
        return "hello World"; // Method: get, post, put, patch, delete, match(head), options.
    }

    function requestQueryString(Request $request){
        $queryString=$request->query();
        return $queryString;
        //http://127.0.0.1:8000/request/querystring?name=ABU&city=TANGAIL //Query String in Request
    }

    function requestParameter(Request $request){
        $name=$request->name;
        $city=$request->city;
        return "{$name} {$city}";
        //http://127.0.0.1:8000/request/parameter/abu/tangail //Parameter in Request
    }

    function requestJsonBody(Request $request){
        $JSONBody=$request->input();
        return $JSONBody; //JSON Body in Request
    }

    function requestHeader(Request $request){
        $headers=$request->header();
        return $headers; //Header in Request
    }

    function requestFormDataFind(Request $request){
        $key1=$request->input(key: '01');
        $key2=$request->input(key: '02');
        return "{$key1} <br> {$key2}"; //Form Data in Request (Its Work for find a data)
    }

    function requestFormDataUpload(Request $request){
        $file=$request->file(key: 'img');
        $file->move(public_path('pictures'), $file->getClientOriginalName());
        return "Successfully Uploaded"; //Form Data in Request (Its Work for Upload a File)
    }

    function requestIpAddressCatch(Request $request){
        return $request->ip();
    } //Its Work for Catching a IP Address
}
