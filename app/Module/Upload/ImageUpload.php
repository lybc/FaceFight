<?php
namespace App\Module\Upload;

interface ImageUpload
{
    public function upload($filePath, $key = null);
    public function download();
    public function auth();
    public function delete($key);
}