<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Users;

class Login extends \Core\Controller
{
    public function userInAction()
    {
        View::renderTemplate('Login/index.html',[
            'users' => Users::getLogin()
        ]);
    }
}