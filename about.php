<?php include('path.php'); ?>
<?php session_start(); ?>
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
    <title>О нас</title>
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
                    <li><a href="<?php echo BASE_URL . 'about.php';?>" style="color: #874ac3"><i class="fas fa-users"></i>О нас</a></li>
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
    <div class="container about_container">
        <div class="about row">
            <div class="about_quote col-md-9 col-12">
                <p class="about_text">
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam est exercitationem facere, iste modi nisi odit. Aliquam, architecto cupiditate deleniti error fugit illum iure magnam nam officia reiciendis, sint vitae."
                </p>
                <span>(c) Галина Юрьевна - ген.директор Color Studio</span>
            </div>
            <div class="about_photo col-md-3 col-12">
                <img src="img/hoz2.png" alt="" class="about_image">
            </div>
        </div>
        <div class="about_main_text">
            <h2 class="about_studio">Немного о нас</h2>
            <p class="about_main_text_content">
                Делаем наших посетителей счастливыми с 2012 года :). Aspernatur autem deserunt expedita explicabo modi nesciunt numquam perferendis, ratione vero voluptas. Dolor earum esse facere ipsam perferendis perspiciatis quo sint tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem deserunt expedita explicabo modi nesciunt numquam perferendis, ratione vero voluptas. Dolor earum esse facere ipsam perferendis perspiciatis quo sint tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>
        <div class="about_contacts col-6">
            <h2 class="our_contacts">Наши контакты:</h2>
            <div class="our_contacts_block">
                <div class="about_address">
                    <span><i class="fas fa-map-marker-alt"></i> г. Москва, ул. Планерная д. 17</span>
                </div>
                <div class="phone">
                    <span><i class="fas fa-phone-alt"></i>&nbsp; <a href="tel:89871231212">8-987-123-12-12</a></span>
                </div>
                <div class="mail">
                    <span><i class="fas fa-mail-bulk"></i>&nbsp; <a href="mailto:colorhair@yahoo.com">colorhair@yahoo.com</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--  footer  -->
    <div class="footer container-fluid">
        <div class="footer-content container">
            <div class="row">
                <div class="footer-section about col-md-4 col-12" style="margin-top: 0;">
                    <p class="logo-title"></p>
                    <p class="logo-text">
                    </p>
                    <div class="socials" style="margin-left: 10px;">
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
                        <li><a href="" class="footer_link">Личный кабинет</a></li>
                        <li><a href="" class="footer_link">Услуги</a></li>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>