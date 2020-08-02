<?php

namespace App\Models;

use PDO;

class Users extends \Core\Model
{
    public static function getUser($login, $name, $password, $address)
    {
        $login = filter_var(trim($login),FILTER_SANITIZE_STRING);
        $name = filter_var(trim($name),FILTER_SANITIZE_STRING);
        $password = filter_var(trim($password),FILTER_SANITIZE_STRING);
        //$password = md5($pass);
        $address = filter_var(trim($address),FILTER_SANITIZE_STRING);

        if (mb_strlen($login) < 3 || mb_strlen($login) < 16) {
            echo "Недопустимая длина логина!";
            exit();
        } elseif (mb_strlen($password) < 3 || mb_strlen($password) < 16) {
            echo "Недопустимая длина пароля!";
            exit();
        }

        $db = static::getDB();
        $stmt = $db->query("INSERT INTO `users` (`login`,`name`,`password`,`address`) VALUES ('$login','$name','$password','$address')");
        header('Location: /');
        exit;
    }

//    public static function getLogin()
//    {
//        $db = static::getDB();
//        $stmt = $db->query("SELECT * FROM `users` WHERE `login`='$this->login' AND `password`='$this->password'");
//        $user = $stmt->fetch(PDO::FETCH_ASSOC);
//
//        if(count($user) == 0) {
//            echo "Нет такого пользователя!";
//            exit();
//        }
//
//        return print_r($user);
//
////        header('Location: /');
//    }
}