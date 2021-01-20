<?php
use Illuminate\Support\Facades\Storage;
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

if (!function_exists('image')) {
    function image($fileName,$size = ''): string
    {
        $fileNameArr = explode('.',$fileName);

        $newFileName = '';
        for ($i = 0; $i < count($fileNameArr); $i++){
            if ($i == (count($fileNameArr)-1)){
                $newFileName .= $size.'.'.$fileNameArr[$i];
            }else{
                $newFileName .= $fileNameArr[$i];
            }
        }
        return Storage::disk('public')->url($newFileName);
    }
}
