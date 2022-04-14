<?php

include SITE_ROOT . "/app/database/db.php";

$errorMessage = '';
$topics = selectAll('topics');

$id = '';
$name = '';
$description = '';


//========================== Создание категории и занесение ее в БД (Create)

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if ($name === '' || $description === '') {
        $errorMessage = 'Вы не заполнили все поля!';
    } elseif (mb_strlen($name, "UTF8") <= 2) {
        $errorMessage = 'Категория должна быть свыше 2-х символов';
    } else {
        $check = selectOne('topics', ['name' => $name]);
        if ($check['name'] === $name) {
            $errorMessage = 'Такая категория уже существует';
        } else {

            $topic = [
                'name' => $name,
                'description' => $description
            ];

            $id = insert('topics', $topic);

            $topic = selectOne('topics', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }
} else {
    $name = '';
    $description = '';
}


//========================== Редактирование категории (Update)

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);

    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if ($name === '' || $description === '') {
        $errorMessage = 'Вы не заполнили все поля!';
    } elseif (mb_strlen($name, "UTF8") <= 2) {
        $errorMessage = 'Категория должна быть свыше 2-х символов';
    } else {
        $topic = [
            'name' => $name,
            'description' => $description
        ];


        $id = $_POST['id'];

        $topic_id = update('topics', $id, $topic);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
}


//========================== Удаление категории (Delete)

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];
    delete('topics', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}