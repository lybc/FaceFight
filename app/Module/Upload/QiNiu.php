<?php
namespace App\Module\Upload;

use Mockery\Exception\RuntimeException;
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
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
        var_dump($ret, $err);
        if (!is_null($err)) throw new \RuntimeException($err);
        return sprintf('%s/%s', env('QINIU_HOST'), $ret['key']);
    }

    function delete($key)
    {
        $bucketMgr = new BucketManager($this->auth);
        $err = $bucketMgr->delete(env('QINIU_BUCKET'), $key);
    }
}