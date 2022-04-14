<?php include('././path.php'); ?>
<div class="footer container-fluid">
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
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
