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

    function __construct()
    {
        $this->middleware('authUser');
    }

    function index()
    {
        debug(session('user.email'));
        $images = Images::all()->toArray();
        return view('index', ['imgs' => $images]);
    }
}
