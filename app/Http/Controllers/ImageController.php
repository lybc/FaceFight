<?php

namespace App\Http\Controllers;

use App\Events\GetImages;
use App\Module\Upload\QiNiu;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ImageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function receive(Request $request)
    {
        $files = $request->file('files');
        $userId = 1;
        foreach ($files as $file) {
            event(new GetImages($file, $userId));
        }
    }

    function edit()
    {

    }

    function del()
    {

    }
}
