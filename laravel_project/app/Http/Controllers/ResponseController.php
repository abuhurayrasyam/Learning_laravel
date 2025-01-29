<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    function response(){
        //return null; //null

        //return "Hello"; //string

        //return 100; //integer

        //return true; //boolean

        //return ['A', 'H', 'S']; //array

        //return array(["name"=>"Abu Hurayra", "city"=>"Tangail"]); //associative array

        //return response()->json(["name"=>"Abu Hurayra", "city"=>"Tangail"]); //json

        //return response()->json(["name"=>"Abu Hurayra", "city"=>"Tangail"], 404); //json with port number

        //return redirect(to:"/home"); //redirect

        //return response()->file("pictures/people.png"); //view a file

        //return response()->download("pictures/people.png"); //download a file

        //return view('pages/home'); //view a blade file
    }
}
