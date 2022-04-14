<?php
include SITE_ROOT . '/path.php';
include SITE_ROOT . "/app/database/db.php";

$errorMessage = '';

$id = ''; // для update
$title = ''; // для update чтобы при попадании на edit конкретной строки нам сразу выводилось название и описание
$content = ''; // для update
$img = '';
$topic = '';

$topics = selectAll('topics');
$posts = selectAll('posts');
$postsJoin = selectAllFromPosts('posts', 'users');

//========================== Создание категории и занесение ее в БД (Create)

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']); // <select name="topic"..

    $publish = isset($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '') {
        $errorMessage = 'Вы не заполнили все поля!';
    } elseif (mb_strlen($title, "UTF8") <= 3) {
        $errorMessage = 'Название статьи не может быть меньше 3 символов';
    } else {
        $post = [
            'id_user' => $_SESSION['id'], //Nika id = 41
            'title' => $title,
            'img' => $_POST['img'],
            'content' => $content,
            'status' => $publish,
            'id_topic' => $topic
        ];

        $id = insert('posts', $post);
        $post = selectOne('posts', ['id' => $id]);
    }
} else {
    $title = '';
    $content = '';
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
