<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Models\Email;
use App\Models\pictuers;
use App\Models\profilepics;
use App\Models\VisitorTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class Homepage extends Controller
{
    //

    public function welcome(Request $request)
    {
        $pics = pictuers::orderBy('id','desc')->take(3)->get();

        $topgames = DB::table('top_games')->get();

        $latest = DB::table('latest_games')->get();

        $youtube = DB::table('you_tubes')->where('Status','On')->first();

        $ipaddress = $request->ip();

        $check = VisitorTable::where('ip_address',$ipaddress)->first();

        $location = Location::get($ipaddress);
        $countryName = isset($location->countryName) ? $location->countryName : 'Unknown';
        $countrycode = isset($location->countryCode) ? $location->countryCode : 'Unknown';
        $regionName = isset($location->regionName) ? $location->regionName : 'Unknown';
        $regionCode = isset($location->regionCode) ? $location->regionCode : 'Unknown';
        $cityName = isset($location->cityName) ? $location->cityName : 'Unknown';
        $zipCode = isset($location->zipCode) ? $location->zipCode : 'Unknown';
        $latitude = isset($location->latitude) ? $location->latitude : 'Unknown';
        $longitude = isset($location->longitude) ? $location->longitude : 'Unknown';
        $areaCode = isset($location->areaCode) ? $location->areaCode : 'Unknown';
        $time = isset($location->timezone) ? $location->timezone : 'Unknown';

        if($check)
        {
            $check->increment('visit_count');
            $check->update([
                'updated_at' => Carbon::now('Asia/Dhaka'),
                'countryName' => $countryName,
                'countrycode' =>$countrycode,
                'regionName' =>$regionName,
                'regionCode' =>$regionCode,
                'cityName' =>$cityName,
                'zipCode'=>$zipCode,
                'latitude'=>$latitude,
                'longitude'=>$longitude,
                'areaCode' =>$areaCode,
                'timezone' =>$time,
            ]);
        }
        else
            VisitorTable::insert([
                'ip_address' => $ipaddress,
                'visit_count' => 1,
                'countryName' => $countryName,
                'countrycode' =>$countrycode,
                'regionName' =>$regionName,
                'regionCode' =>$regionCode,
                'cityName' =>$cityName,
                'zipCode'=>$zipCode,
                'latitude'=>$latitude,
                'longitude'=>$longitude,
                'areaCode' =>$areaCode,
                'timezone' =>$time,
                'created_at' => Carbon::now('Asia/Dhaka'),
                'updated_at' => Carbon::now('Asia/Dhaka')
            ]);

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

