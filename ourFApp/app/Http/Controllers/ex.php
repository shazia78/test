<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ex extends Controller
{
    public function homepage(){

        // imagine we loaded data from database
        $ourName='Brad';

        return view('home',["name"=>$ourName, 'catName'=>'meowsALot']);

    }

    public function about(){

        // imagine we loaded data from database
        // $ourName='Brad';

        return view('single-post');

    }
}
