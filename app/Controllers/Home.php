<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index
    (
    )
    : string
    {
        print_r(
            'xxx');

        print_r
        (
            '
        fan');

        return view('welcome_message');
    }
}
