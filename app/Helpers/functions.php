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

if (!function_exists('generateToken')) {
    function generateToken()
    {
        $header = (object)[
            'alg' => "HS256",
            'typ' => 'JWT'
        ];
        $payLoad = (object)[
            'iss' => '37d1639bf8fed9c7811a9eff402d2833',
            'iat' => strtotime(now()),
            'exp' => strtotime(now()) + 5000,
            'ver' => 1
        ];
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($header)));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($payLoad)));
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, '51eee551ad0a440608e4a379f7bfa52f', true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
        return $jwt;
    }
}
