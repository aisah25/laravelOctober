<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Sentinel, Reminder;
use App\User;
class ReminderEven
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $reminder;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $reminder)
    {
        $this->user =$user;
        $this->remider = $reminder;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
