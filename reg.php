<?php
    session_start();
    include('path.php');
    include('app/controllers/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3d6097b44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Регистрация</title>
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
                    </a></h1>
                </div>
                <!--Menu-->
                <nav class="col-8 menu">
                    <ul>
                        <li><a href="<?php echo BASE_URL;?>"><i class="fas fa-home"></i>Главная</a></li>
                        <li><a href="<?php echo BASE_URL . 'about.php';?>"><i class="fas fa-users"></i>О нас</a></li>
                        <li><a href="#"><i class="fas fa-briefcase"></i>Услуги</a></li>
                        <li class="cabinet">
                            <?php if(isset($_SESSION['id'])):?>
                                <a href="<?php echo BASE_URL . 'login.php';?>">
                                    <i class="fas fa-user-alt cabinet__link"></i>
                                    <?php echo $_SESSION['login'];?>
                                </a>
                                <ul class="cabinet__sublist">
                                    <?php if($_SESSION['admin'] === 1):?>
                                        <li class="cabinet__subli"><a href="<?php ?>" class="cabinet__sublink">Панель администратора</a></li>
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
    <br><br><br><br>
    <!-- html-form  -->
    <h2 class="form_title">Форма регистрации</h2>
    <p class="success_mess" style="font-size: 30px;
    color: #4a0f3f;
    font-weight: 900;
    text-align: center;"><?=$successMessage?></p>
    <form action="reg.php" method="post" class="col-6 form_reg">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Введите Ваш логин</label>
                <input name="login" value="<?=$login?>" type="text" class="form-control login_input" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите Вашу почту</label>
                <input name="email" value="<?=$email?>" type="email" class="form-control mail_input" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
                <input name="password" type="password" class="form-control pass_input" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                <input name="password2" type="password" class="form-control pass_input" id="exampleInputPassword2">
            </div>
            <button name="submit" type="submit" class="btn form_submit">Зарегистрироваться</button>
            <div class="mb-3">
                <a href="login.php" class="autoris">*Либо авторизоваться</a>
            </div>
            <div class="mb-3 err_block">
                <p class="error_mess"> <?=$errorMessage?> </p>
            </div>
        </form>
    <footer class="footer container-fluid">
        <div class="footer-content container">
            <div class="row">
                <div class="footer-section about_main col-md-4 col-12">
                    <p class="logo-title"> <a href="<?php echo BASE_URL;?>">
                        Color
                        <span class="a">S</span><span class="b">t</span><span class="c">u</span><span class="d">d</span><span class="e">i</span><span class="f">o</span>
                    </a> </p>

                    <div class="contacts">
                        <div class="phone">
                            <span><i class="fas fa-phone-alt"></i>&nbsp; <a href="tel:89871231212">8-987-123-12-12</a></span>
                        </div>
                        <div class="mail">
                            <span><i class="fas fa-mail-bulk"></i>&nbsp; <a href="mailto:colorhair@yahoo.com">colorhair@yahoo.com</a></span>
                        </div>
                    </div>
                    <div class="socials">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-instagram-square"></i></a>
                        <a href=""><i class="fab fa-youtube-square"></i></a>
                    </div>
                </div>
                <div class="footer-section links col-md-4 col-12">
                    <ul class="footer_links">
                        <li><a href="<?php echo BASE_URL . 'reg.php';?>" class="footer_link">Регистрация</a></li>
                        <li><a href="<?php echo BASE_URL . 'login.php';?>" class="footer_link">Вход</a></li>
                        <li><a href="#" class="footer_link">Личный кабинет</a></li>
                        <li><a href="#" class="footer_link">Услуги</a></li>
                        <li><a href="<?php echo BASE_URL . 'about.php';?>" class="footer_link">О нас</a></li>
                    </ul>
                </div>
                <div class="footer-section contact-form col-md-4 col-12">
                    <h4 class="contact-form_title">Свяжитесь с нами</h4>
                    <form class="footer-form" action="#" method="post">
                        <input type="email" name="email" class="footer-input" placeholder="Enter your email">
                        <textarea name="message"  class="footer-area" placeholder="Enter your message"></textarea>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>
                            Отправить
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; colorhair.com | Designed by Galina
            </div>
        </div>
    </footer>
</body>
</html>