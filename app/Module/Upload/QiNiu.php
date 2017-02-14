<?php
namespace App\Module\Upload;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class QiNiu implements ImageUpload
{
    private $auth;

    function __construct()
    {
        $this->auth = new Auth(env('QINIU_AK'), env('QINIU_SK'));
    }

    function auth()
    {
        // TODO: Implement auth() method.
    }

    function download()
    {
        // TODO: Implement download() method.
    }

    function upload($filePath, $key = null)
    {
        $token = $this->auth->uploadToken(env('QINIU_BUCKET'));
        $upload = new UploadManager();
        if (empty($key)) {
            $key = explode('/', $filePath);
            $key = end($key);
        }
        list($ret, $err) = $upload->putFile($token, $key, $filePath);
    }
}