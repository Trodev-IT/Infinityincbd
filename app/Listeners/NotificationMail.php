<?php

namespace App\Listeners;

use App\Events\SubscriberMail;
use App\Models\Subcriber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NotificationMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubscriberMail $event): void
    {
        $user = Subcriber::find($event->subscriber_id);

        $admins = DB::table('users')->get();

        foreach ($admins as $admin) {
            Mail::send('subscriber', ['user' => $user,'admin'=>$admin], function ($message) use ($admin, $user) {
                $message->to($admin->email);
                $message->subject('A new subscriber');
            });
        }
    }
}
