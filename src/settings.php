<?php
if (!function_exists('settings')) {
    function settings()
    {
        return [
            'companyname'=> 'Metromony',
            'homepage'=> 'http://localhost/mysql/project/meethub2/',
            'hostname'=> 'localhost',
            'user'=> 'root',
            'password'=> '',
            'database'=> 'meethub'
        ];
    }
}
if (!function_exists('testfunc')) {
    function testfunc()
    {
        return "<h3>testing common functions</h3>";
    }
}
