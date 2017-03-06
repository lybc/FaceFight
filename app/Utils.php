<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Utils
{
    static function createModel(array $request, $modelNamespace, array $ignore = [])
    {
        $defaultIgnoreKeys = ['_token'];
        $ignore = array_merge($ignore, $defaultIgnoreKeys);

        $model = new $modelNamespace;
        if (! $model instanceof Model) throw new ModelNotFoundException("$modelNamespace is not a Eloquent Model");

        foreach ($request as $key => $item) {
            if (in_array($key, $ignore)) continue;
            $model->{$key} = $item;
        }
        return $model;
    }

}