<?php

namespace App;


use Identicon\Identicon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Utils
{
    /**
     * @param array $request
     * @param       $modelNamespace
     * @param array $ignore
     * @return mixed
     */
    static function createModel(array $request, $modelNamespace, array $ignore = [])
    {
        $defaultIgnoreKeys = ['_token'];
        $ignore = array_merge($ignore, $defaultIgnoreKeys);

        $model = new $modelNamespace;
        if (!$model instanceof Model) throw new ModelNotFoundException("{$modelNamespace} is not a Eloquent Model");

        foreach ($request as $key => $item) {
            if (in_array($key, $ignore)) continue;
            $model->{$key} = $item;
        }
        return $model;
    }

    static function getAvatar()
    {
        if (!empty(session('user.avatar'))) {
            return session('user.avatar');
        }
        return app()->make(Identicon::class)->getImageDataUri(session('user.email'));
    }

}