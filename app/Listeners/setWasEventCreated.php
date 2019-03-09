<?php

namespace App\Listeners;
use App\Mail\theProjectCreated ;
use App\Events\projectCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class setWasEventCreated
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
     * @param  projectCreated  $event
     * @return void
     */
    public function handle(projectCreated $event)
    {
        \Mail::to($event->$pro->owner->email)->send(
             new theProjectCreated($event->$pro)
          );
    }
}
