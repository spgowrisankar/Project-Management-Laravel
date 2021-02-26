<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Model\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetDefaultRoleListener
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
     * @param  UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        //

        $role = Role::where('slug','developer')->firstOrFail();
        $event->user->roles()->attach($role->id);
    }
}
