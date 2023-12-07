<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
