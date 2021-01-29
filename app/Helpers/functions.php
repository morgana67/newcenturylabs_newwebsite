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
    function image($fileName,$size = ''): ?string
    {
        if(empty($fileName)) return null;
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

if (!function_exists('uploadFile')) {
    function uploadFile($path = "", $name = "file")
    {
        $file     = request()->file($name);
        $fileName = $name.'.'.$file->getClientOriginalExtension();
        return Storage::disk(config('voyager.storage.disk'))->putFileAs($path,request()->file($name),$fileName);
    }
}

if (!function_exists('format_price')) {
    function format_price($price): string
    {
        if(is_numeric($price) && floor($price) != $price){
            return number_format((float)$price, 2, '.', '');
        }else{
            return floatval($price);
        }
//        return number_format((float)$price, 2, '.', '');
    }
}

if (!function_exists('is_decimal')) {
    function is_decimal($val)
    {
        return is_numeric($val) && floor($val) != $val;
    }
}
