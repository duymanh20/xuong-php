<?php

//khai báo các hàm dùng Global
if (!function_exists('require_file')) {
    function require_file ($pathFoder) {

        $files = array_diff(scandir($pathFoder), ['.','..']);

        foreach ($files as $file) {
            require_once $pathFoder . '/' . $file;

        }
    }
}

if (!function_exists('debug')) {
    function debug ($data) {
        echo "<pre>";

        print_r($data);
        die;
    }
}