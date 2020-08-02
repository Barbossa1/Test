<?php

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 4 || mb_strlen($login) > 12) {
    echo "Недопустимая длина логина!";
    exit();
} elseif (mb_strlen($password) < 3 || mb_strlen($password) > 6) {
    echo "Недопустимая длина пароля!";
    exit();
}
