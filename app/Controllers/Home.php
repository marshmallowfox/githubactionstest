<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(
    ): string {
        print_r(
            'far'
        );

        return view('welcome_message');
    }
}
