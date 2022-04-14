<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3d6097b44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Главная</title>
    <script src="js/functions.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<header class="header container-fluid">
    <div class="container">
        <div class="row">
            <!--Logo-->
            <div class="col-4">
                <h1><a href="<?php echo BASE_URL;?>">
                        Color
                        <span class="a">S</span><span class="b">t</span><span class="c">u</span><span class="d">d</span><span class="e">i</span><span class="f">o</span>
                    </a>
                </h1>
            </div>
            <!--Menu-->
            <nav class="col-8 menu">
                <ul>
                    <li><a href="<?php echo BASE_URL;?>" style="color: #874ac3"><i class="fas fa-home"></i>Главная</a></li>
                    <li><a href="<?php echo BASE_URL . 'about.php';?>"><i class="fas fa-users"></i>О нас</a></li>
                    <li><a href="#"><i class="fas fa-briefcase"></i>Услуги</a></li>
                    <li class="cabinet">
                        <?php if(isset($_SESSION['id'])):?>
                            <a href="<?php echo BASE_URL . 'login.php';?>">
                                <i class="fas fa-user-alt cabinet__link"></i>
                                <?php echo $_SESSION['login'];?>
                            </a>
                            <ul class="cabinet__sublist">
                                <?php if($_SESSION['admin'] == 1):?>
                                <li class="cabinet__subli"><a href="<?php echo BASE_URL . 'admin/posts/index.php';?>" class="cabinet__sublink">Панель администратора</a></li>
                                <?php endif; ?>
                                <li class="cabinet__subli"><a href="<?php echo BASE_URL . 'logout.php';?>" class="cabinet__sublink">Выход</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . 'login.php';?>">
                                <i class="fas fa-user-alt cabinet__link"></i>Вход
                            </a>
                            <ul class="cabinet__sublist">
                                <li class="cabinet__subli"><a href="<?php echo BASE_URL . 'reg.php';?>" class="cabinet__sublink">Регистрация</a></li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
