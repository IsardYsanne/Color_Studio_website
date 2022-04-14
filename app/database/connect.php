<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'site';
$db_user = 'ysanne';
$db_pass = '9272';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];


/*
PDO::ATTR_ERRMODE - способ обработки ошибок
PDO::ERRMODE_EXCEPTION - опция, возвращающая исключение PDOException при возникновении ошибки
PDO::ATTR_DEFAULT_FETCH_MODE - Задаёт тип получаемого результата по-умолчанию
*/

try{
    $pdo = new PDO(
        "$driver:host=$host; dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
}catch(PDOException $i){
    die("Ошибка подключения к БД");
}
