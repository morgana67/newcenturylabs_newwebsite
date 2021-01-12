<?php
if (!function_exists('is_customer')) {
    function is_customer()
    {
        return \Auth::guard('customer')->check();
    }
}


if (!function_exists('user')) {
    function user()
    {
        $user = null;
        if(is_customer()) {
            $user =  \Auth::guard('customer')->user();
        }
        return $user;
    }
}

if (!function_exists('message_set')) {
    function message_set($message = "", $type = "success")
    {
        session()->flash('message.level', $type);
        session()->flash('message.content', $message);
    }
}
