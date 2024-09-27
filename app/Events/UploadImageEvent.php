<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UploadImageEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $path;
    public $name;
    public $itemId;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($path, $name, $itemId)
    {
        $this->path = $path;
        $this->name = $name;
        $this->itemId = $itemId;
    }

}
