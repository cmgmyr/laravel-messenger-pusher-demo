<?php

namespace Md\Services;

use Illuminate\Support\Facades\Config;

class PusherWrapper
{
    protected $pusher;

    public function __construct()
    {
        $app_id = Config::get('pusher.appId');
        $app_key = Config::get('pusher.appKey');
        $app_secret = Config::get('pusher.appSecret');

        $this->pusher = new \Pusher($app_key, $app_secret, $app_id);
    }

    public function __call($name, $args)
    {
        return call_user_func_array(array($this->pusher, $name), $args);
    }
}
