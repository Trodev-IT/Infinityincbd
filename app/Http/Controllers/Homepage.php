<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Models\Email;
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

        $latest = DB::table('latest_games')->get();

        $youtube = DB::table('you_tubes')->where('Status','On')->first();

        return view('welcome',['pics'=>$pics,'top'=>$topgames,'latest'=>$latest,'youtube'=>$youtube]);
    }

    public function aboutus()
    {
        $about = DB::table('about_us')->first();

        $testimonials = DB::table('testimonials')->get();

        $teams = DB::table('teams')->get();
        return view('aboutus',['about'=>$about,'testimonial'=>$testimonials,'teams'=>$teams]);
    }

    public function projectbase()
    {
        $project = DB::table('projects')->get();
        return view ('project',['project'=>$project]);
    }
    public function singlepage($id)
    {
        $project=DB::table('projects')->find($id);
        return view ('singlepage',['id'=>$project]);
    }

    public function gallary()
    {
        $aboutus = DB::table('gallaries')->get();

        return view('gallary',['gallaries'=>$aboutus]);
    }

    public function contact()
    {
        return view('contactus');
    }

    public function sendEmail(Request $request)
    {
        $user = Email::insert([
            'name'=>$request->input('w3lName'),
            'subject'=>$request->input('w3lSubject'),
            'email'=>$request->input('w3lSender'),
            'message'=>$request->input('w3lMessage'),
        ]);

        event(new SendMail($user));

        return redirect()->back();
    }
}

