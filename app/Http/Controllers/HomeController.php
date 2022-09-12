<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($locale = null)
    {
        // you can call some model here
        // store data in a variable and
        // pass this data to your view file

        // passing data to view file
        if (isset($locale) && in_array($locale, ['en','fa'])) {
            app()->setLocale($locale);
        }

        $theme_name="first";

        return view('theme/'.$theme_name.'/home/index', [
            "message" => __('message.welcome'),
            "helper" => TestHelperGet(),
            "theme_name" => __($theme_name)
        ]);
    }
}