<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   /* private $Email;*/
    function registration()
    {

   /* return view ('Registration',['Email'=>'abc@gmail.com','Password'=>'1234','RepeatPass'=>'1234']);*/
   return view ('Registration')
        ->with ('State','abcd')
        ->with ('City','abcd')
        ->with ('Country','abcd')
        ->with ('Address','Ramna')
        ->with ('Post Office Number','123');


    }

    function getregister(Request $request)
    {
        $request->validate(
        ['State'=>'required|min:3|string',
        'City'=>'required|min:3|string',
        'Country'=>'required|min:4|string',
        'Address'=>'required|min:4|string',
        'Post Office Number'=>'required|min:4|numeric',
        ],

        [
        'State.required' =>'State required*',
        'State.min' =>'Enter min 3 char',

        'City.required' =>'City required*',
        'City.min' =>'Enter min 3 char',

        'Country.required' =>'Countryrequired*',
        'lCountry.min' =>'Enter min 4 char',

        'Address.required' =>'Addressrequired*',
        'Address.min' =>'Enter min 4 char',

        'Post Office Number*.required' =>'Post Office Number required*',
        'Post Office Number.min' =>'Enter min 4 char',
        ]);
    }

}
