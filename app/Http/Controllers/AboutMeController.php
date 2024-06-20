<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutMe(){

        return view('about')
                ->with('name' , 'Arianne Liz I. Gomez')
                ->with('email', 'ariannegomez03@gmail.com')
                ->with('address', 'Casantiagoan, San Manuel, Pangasinan')
                ->with('dateOfBirth' , 'May 19, 2003')
                ->with('placeOfBirth' , 'Urdaneta City, Pangasinan')
                ->with('age' , '21 Years Old')
                ->with('gender' , 'Female')
                ->with('civilStatus' , 'Single')
                ->with('citizenship' ,	'Filipino')
                ->with('fName' , 'Arnold S. Gomez')
                ->with('mName' , 'Flordeliza F. Ignacio')
                ->with('height' , '5’2')
                ->with('weight' , '65 kgs.')
                ->with('language' , 'Filipino'); 
    }
}