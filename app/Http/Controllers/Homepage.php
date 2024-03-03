<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Events\SubscriberMail;
use App\Models\Email;
use App\Models\EventRegister;
use App\Models\pictuers;
use App\Models\profilepics;
use App\Models\Subcriber;
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

        $project = DB::table('projects')->latest()->first();
        $project2 = DB::table('create_events')->latest()->first();

        return view('welcome',['pics'=>$pics,'top'=>$topgames,'latest'=>$latest,'youtube'=>$youtube,'pr'=>$project, 'pro' =>$project2]);
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
        $allproj = DB::table('projects')->take(2)->get();
        return view ('singlepage',['id'=>$project,'proj'=>$allproj]);
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

    public function subscriber(Request $request)
    {
        $email = Subcriber::create([
            'email'=>$request->input('email'),
            'subscriber_id' => 'subscriber' . mt_rand(1000, 9999),
        ]);

        $subscriber_id = $email->id;

        event(new SubscriberMail($subscriber_id));

        return redirect()->back();
    }

    public function eventsList()
    {
        $now = Carbon::now();
        $event = DB::table('create_events')->where('deadline','>=',$now)->get();
        return view('events',['event'=>$event,'now'=>$now]);
    }

    public function details_event($id)
    {
        $now = Carbon::now();
        $event = DB::table('create_events')->find($id);
        $events = DB::table('create_events')->where('deadline','>=',$now)->get();
        return view('eventdetails',['event'=>$event,'even'=>$events]);
    }

    public function eventregister($id)
    {
        $event = DB::table('create_events')->find($id);
        return view('eventregistration',['event'=>$event]);
    }

    public function registerEvent(Request $request)
    {
        $check = EventRegister::where('player_email',$request->input('email'))
            ->where('player_phone',$request->input('phone'))->where('event_id',$request->input('event_id'))->first();
        if (!$check) {
            if ($request->input('price') > 0) {
                $eventid = $request->input('event_id');
                $eventname = $request->input('event_name');
                $username = $request->input('name');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $payment = $request->input('payment');
                $transaction = $request->input('transaction');

                $insert = EventRegister::create([
                    'slno' => $request->input('id'),
                    'event_id' => $eventid,
                    'player_name' => $username,
                    'player_email' => $email,
                    'player_phone' => $phone,
                    'payment' => $payment,
                    'transaction' => $transaction,
                    'status' => 'Pending',
                ]);

                $id = $insert->id;

                return redirect()->route('paymentsuccess', ['id' => $id]);
            } else {
                $eventid = $request->input('event_id');
                $eventname = $request->input('event_name');
                $username = $request->input('name');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $payment = $request->input('payment');
                $transaction = $request->input('transaction');

                $insert = EventRegister::create([
                    'slno' => $request->input('id'),
                    'event_id' => $eventid,
                    'player_name' => $username,
                    'player_email' => $email,
                    'player_phone' => $phone,
                    'status' => 'Confirmed',
                ]);

                $id = $insert->id;

                return redirect()->route('welcome');
            }
        }
        else{
            return redirect()->back()->with('error','You already register with this email for this event. Try different email and phone.');
        }
    }

    public function checkEmailAvailability(Request $request)
    {
        $check = EventRegister::where('player_email', $request->input('email'))
            ->where('event_id', $request->input('event_id'))
            ->exists();

        return response()->json(['available' => !$check]);
    }

    public function paymentsuccess($id)
    {
        $user = EventRegister::find($id);
        $eventname = DB::table('event_registers')->join('create_events', 'event_registers.event_id', '=', 'create_events.event_id')
            ->where('event_registers.id', $id)
            ->select('create_events.event_name as event_name')
            ->first();
        return view('paymentsuccessful',['id'=>$user,'name'=>$eventname]);
    }
}

