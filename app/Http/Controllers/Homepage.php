<?php

namespace App\Http\Controllers;

use App\Models\pictuers;
use App\Models\profilepics;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    //

    public function welcome()
    {
        $pics = pictuers::get();

        return view('welcome',['pics'=>$pics]);
    }
}
