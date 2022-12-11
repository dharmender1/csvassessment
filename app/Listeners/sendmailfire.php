<?php

namespace App\Listeners;

use App\Events\sendemail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Mail;
class sendmailfire implements ShouldQueue
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
     * @param  \App\Events\sendemail  $event
     * @return void
     */
    public function handle(sendemail $event)
    {
        $user = User::find($event->userId)->toArray();
        Mail::send('eventMail',$user,function($message) use ($user){
            $message->to($user['email']);
            $message->subject("CSV Generatig Successfully");
        });
    }
}
