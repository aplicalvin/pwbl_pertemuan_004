<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/v_home');
    }

    public function example() {
        return view('pages/__template');
    }
}
