<?php

namespace App\Controllers;

use Core\View;

class AuthController
{
    public function index()
    {
        View::render('login.view.php');
    }
}