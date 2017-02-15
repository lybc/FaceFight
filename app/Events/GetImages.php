<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class GetImages
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $file;
    public $userId;

    /**
     * GetImages constructor.
     *
     * @param UploadedFile $file
     * @param int          $userId
     */
    public function __construct(UploadedFile $file, $userId)
    {
        $this->file = $file;
        $this->userId = $userId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
