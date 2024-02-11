<?php

namespace App\Http\Controllers;

use App\Models\pictuers;
use App\Models\profilepics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homepage extends Controller
{
    //

    public function welcome()
    {
        $pics = pictuers::orderBy('id','desc')->take(3)->get();

        $topgames = DB::table('top_games')->get();

        return view('welcome',['pics'=>$pics,'top'=>$topgames]);
    }
}
