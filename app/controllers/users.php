<?php

include 'D:\#openserver\OpenServer\domains\site\app\database\db.php';

$errorMessage = '';
$successMessage = '';

//=====================================Регистрация============================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $pass2 = trim($_POST['password2']);


    if ($login === '' || $email === '' || $pass === '' || $pass2 === '') {
        $errorMessage = 'Вы не заполнили все поля!';
    } elseif (mb_strlen($login, "UTF8") <= 2) {
        $errorMessage = 'Логин должен быть свыше 2-х символов';
    } elseif (mb_strlen($pass, "UTF8") <= 3) {
        $errorMessage = 'Пароль должен быть свыше 3-х символов';
    } elseif ($pass !== $pass2) {
        $errorMessage = 'Неверно повторили пароль';
    } else {
        $check = selectOne('users', ['email' => $email]);
        if ($check['email'] === $email) {
            $errorMessage = 'На данную почту уже зарегистрирован пользователь';
        } else {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if ($_SESSION['admin']) {
                header('location: ' . BASE_URL . 'admin/admin.php');
            } else {
                header('location: ' . BASE_URL); //редиректим на Главную
            }
        }
    }
} else {
    $login = '';
    $email = '';
}

//=====================================Авторизация============================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sub'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);

    if ($email === '' || $password === '') {
        $errorMessage = 'Вы не заполнили все поля!';
    } else {
        $checkAut = selectOne('users', ['email' => $email]);

        if ($checkAut && password_verify($password, $checkAut['password'])) {

            $_SESSION['id'] = $checkAut['id'];
            $_SESSION['login'] = $checkAut['username'];
            $_SESSION['admin'] = $checkAut['admin'];

            if ($_SESSION['admin']) {
                header('location: ' . BASE_URL . 'admin/posts/index.php');
            } else {
                header('location: ' . BASE_URL);
            }
        } else {
            $errorMessage = 'Почта либо пароль введены неверно';
        }
    }
} else {
    $email = '';
}
