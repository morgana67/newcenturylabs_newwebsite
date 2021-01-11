<?php
if (!function_exists('is_customer')) {
    function is_customer()
    {
        return \Auth::guard('customer')->check();
    }
}
