<?php

namespace App\Listeners;

use App\Events\ReminderEven;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ReminderMailable;
class ReminderEmailSeeder
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReminderEven  $event
     * @return void
     */
    public function handle(ReminderEven $event)
    {
        $user = $event->user;
        $eminder = $event->reminder;
        $detail =[
            'id' => $user->id;
            'email' => $user->email;
            'code' => $reminder->code;
        ];
        Mail::to($user->email)->queue( new ReminderMailable($detail));
    }
}
