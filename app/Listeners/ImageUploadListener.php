<?php

namespace App\Listeners;

use App\Events\GetImages;
use App\Model\Images;
use App\Module\Upload\QiNiu;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImageInfoSaveListener
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
     * @param  GetImages  $event
     * @return void
     */
    public function handle(GetImages $event)
    {
        $cloud = new QiNiu();
        $key = sprintf('%s.%s', uniqid('face-'), $event->file->extension());
        $url = $cloud->upload($event->file->path(), $key);
        $img = new Images();
        $img->href = $url;
        $img->md5 = md5_file($event->file);
        $img->size = $event->file->getSize();
        $img->sourceFileName = $event->file->getFilename();
        $img->targetFileName = $key;
        $img->save();
    }
}
