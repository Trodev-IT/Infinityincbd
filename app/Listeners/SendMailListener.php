<?php

namespace App\Listeners;

use App\Events\SendMail;
use App\Models\Email;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMailListener
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
    public function handle(SendMail $event): void
    {
        $users = Email::find($event->user);

        // Notify all admins

        $admins = DB::table('users')->get();
        foreach ($admins as $admin) {
            Mail::send('admin_notification_mail', ['user' => $users,'admin'=>$admin], function ($message) use ($admin, $users) {
                $message->to($admin->email);
                $message->subject($users->subject);
            });
        }
    }
}
