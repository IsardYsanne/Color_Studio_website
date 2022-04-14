<?php

session_start();

require_once('connect.php');

function outTest($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

//======== функция проверки ошибок

function dbCheckError($query) {
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

//======== Пропишем параметры, при изменении этих параметров будет выводиться соответвующий им массив с пользователем

$params = [
    'email' => 'galinakor@mail.ru',
    'username' => 'Galina'
];

//======== основная ф-ия, получающая данные с одной таблицы, которую будем использовать

function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if ($i === 0) {
                $sql = "$sql WHERE $key = '$value'";
            } else {
                $sql = "$sql  AND $key = '$value'";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}

//======== запрос на получение одной строки с выбранной таблицы, выведет одномерный массив

function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if ($i === 0) {
                $sql = "$sql WHERE $key = '$value'";
            } else {
                $sql = "$sql  AND $key = '$value'";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetch();
}

//======== Запись в таблицу БД

function insert($table, $param) {

    global $pdo;

    $i = 0;
    $col = '';
    $mask = '';
    foreach ($param as $key => $value) {
        if ($i === 0) {
            $col = $col . "$key";
            $mask = $mask . "'$value'";
        } else {
            $col = $col . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($col) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute($param);

    dbCheckError($query);

    return $pdo->lastInsertId();
}

$arrData = [
    'admin' => 0,
    'username' => 'Lila',
    'email' => 'lila@list.ru',
    'password' => '1479',
    'created' => '2021-09-22 00:01:43'
];

//======== Обновление строки в таблице

function update($table, $id, $param) {
    global $pdo;

    $i = 0;
    $str = '';

    foreach ($param as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str  WHERE id = '$id'";

    $query = $pdo->prepare($sql);
    $query->execute($param);

    dbCheckError($query);
}

$param3 = [
    'admin' => 0,
    'password' => 123456789,
    'email' => 'skhf@mail.ru'
];

//======== Функция удаления, принимающая таблицу и id

function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = '$id'";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
}

//======== posts/index.php сделаем, чтобы $post['id_user'] выдавал не id, а логин, соответвующий id

function selectAllFromPosts($table1, $table2) {
    global $pdo;

    $sql = "SELECT 
    t1.id,
    t1.title,
    t1.img,
    t1.content,
    t1.status,
    t1.id_topic,
    t1.created_date,
    t2.username
    FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    return $query->fetchAll();
}
