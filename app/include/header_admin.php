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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Главная</title>
    <script src="../../js/functions.js"></script>
    <script src="../../js/scroll.js"></script>
    <script src="../../js/script.js"></script>
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
                <ul class="admin__list">
                    <li>
                        <a href="<?php echo BASE_URL . 'login.php';?>">
                            <i class="fas fa-user-alt cabinet__link"></i>
                            <?php echo $_SESSION['login'];?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'logout.php';?>" class="admin__link">Выход
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>