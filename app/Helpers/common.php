<?php

function mix($path, $secure = null) {
    $debug = env('APP_DEBUG', false);
    if ($debug) {
        $port = 8080;
        $asset = asset($path, $secure);
        return str_replace(url('/'), url('/') . ":{$port}", $asset);
    }

    return asset($path, $secure);
}