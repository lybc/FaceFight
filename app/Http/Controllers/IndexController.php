<?php

namespace App\Http\Controllers;

use App\Events\GetImages;
use App\Model\Images;
use App\Module\Upload\QiNiu;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {
        $images = Images::all()->toArray();
        return view('index', ['imgs' => $images]);
    }
}
