<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListOfItemController extends Controller
{
    public function index() {
        return view('ListOfItem');
    }

    /*public function search(){
        return view('ListSearchItem');
    }*/
}
