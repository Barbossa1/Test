<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Users;

class Registration extends \Core\Controller
{
    protected $login = '';
    protected $name = '';
    protected $password = '';
    protected $address = '';

    public function construct()
    {
        $this->login = $_POST['login'];
        $this->name = $_POST['name'];
        $this->password = $_POST['password'];
        $this->address = $_POST['address'];
        return;
    }

    public function userAddAction()
    {
        View::renderTemplate('Registration/index.html',[
            'users' => Users::getUser($this->login, $this->name, $this->password, $this->address)
        ]);
    }
}