<?php
include('path.php');
require_once('app/include/header.php');
require_once('app/controllers/topics.php');
?>
    <div class="container">
        <!--  slider  -->
        <div class="container container-slider">
            <div class="row">
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/100.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a href="" style="color:whitesmoke">Колористика</a></h5>
                            <p>Создавай самые запоминающиеся образы</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/200.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Свыше 450 разных оттенков</h5>
                            <p>Именитых брендов</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/300.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Стойкость до 1 месяца</h5>
                            <p>Укладка в подарок</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </div>
        <!--  content -->
        <div class="container container_content">
            <div class="content row">
                <div class="main-content col-md-9 col-12">
                    <div class="post row">
                        <div class="img col-12 col-md-4">
                            <img class="img-thumbnail" src="img/11.jpg" alt="">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h2>
                                <a class="content_title" href="article.php">Создай свой неповторимый образ</a>
                            </h2>
                            <div class="content_icons">
                                <div class="content_block_icons">
                                    <i class="fas fa-air-freshener content_icon"></i>
                                    <span class="sub_icon_text">Hair love</span>
                                </div>
                                <div class="content_block_icons">
                                    <i class="far fa-calendar-alt content_icon"></i>
                                    <span class="sub_icon_text">Jun 21, 2021</span>
                                </div>
                            </div>
                            <p class="preview-text">
                                Lorem ipsum dolor sit amet. Animi, consequuntur et necessitatibus nihil obcaecati voluptatum?consectetur adipisicing elit. Animi, consequuntur et necessitatibus nihil.
                            </p>
                        </div>
                    </div>
                    <div class="post row">
                        <div class="img col-12 col-md-4">
                            <img class="img-thumbnail" src="img/22.jpg" alt="">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h2>
                                <a class="content_title" href="article.php">Зарегистрируся, получи промокод</a>
                            </h2>
                            <div class="content_icons">
                                <div class="content_block_icons">
                                    <i class="fas fa-air-freshener content_icon"></i>
                                    <span class="sub_icon_text">Hair love</span>
                                </div>
                                <div class="content_block_icons">
                                    <i class="far fa-calendar-alt content_icon"></i>
                                    <span class="sub_icon_text">Jun 21, 2021</span>
                                </div>
                            </div>
                            <p class="preview-text">
                                Lorem ipsum dolor sit amet. Animi, consequuntur et necessitatibus nihil obcaecati voluptatum?consectetur adipisicing elit. Animi, et consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="post row">
                        <div class="img col-12 col-md-4">
                            <img class="img-thumbnail" src="img/33.jpg" alt="">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h2>
                                <a class="content_title" href="article.php">Зарегистрируся, получи промокод</a>
                            </h2>
                            <div class="content_icons">
                                <div class="content_block_icons">
                                    <i class="fas fa-air-freshener content_icon"></i>
                                    <span class="sub_icon_text">Hair love</span>
                                </div>
                                <div class="content_block_icons">
                                    <i class="far fa-calendar-alt content_icon"></i>
                                    <span class="sub_icon_text">Jun 21, 2021</span>
                                </div>
                            </div>
                            <p class="preview-text">
                                Lorem ipsum dolor sit amet. Animi, consequuntur et necessitatibus nihil obcaecati voluptatum?consectetur adipisicing elit. Animi, et consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!--       sidebar     -->
                <div class="sidebar col-md-3 col-12">
                    <!--         search form          -->
                    <div class="section search">
                        <p class="search_title">Поиск</p>
                        <form action="#" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Найти..">
                        </form>
                    </div>
                    <div class="section topics">
                        <p class="topics_title">Категории</p>
                        <ul class="topics_list">
                            <?php foreach($topics as $key => $topic): ?>
                            <li><a href="#" class="topics_link"><?=$topic['name']?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--  reviews -->
        <div class="reviews container">
            <h3 class="reviews_main_title">Отзывы о нас</h3>
            <div class="reviews_block col-12">
                <div class="reviews_elements">
                    <div class="reviews_icon">
                        <img src="img/icon.png" width="55" height="55" alt="">
                    </div>
                    <p class="reviews_title">
                        Обожаю технику, на которой работаю здешние мастера!
                    </p>
                </div>
                <div class="reviews_comment">
                    <p class="reviews_content">
                        "Рекомендую студию, работают на моих люимых пигментах Антоцианина и ManicPanic. И даже цены не кусаются, подобрали уход после 3х часов осветления, что весьма кстати :) Отдельное спасибо мастеру Татьяне"
                    </p>
                </div>
            </div>
            <div class="reviews_block col-12">
                <div class="reviews_elements">
                    <div class="reviews_icon">
                        <img src="img/icon2.png" width="55" height="55" alt="">
                    </div>
                    <p class="reviews_title">
                        Записывалась на осветление и тонирвоание, в целом осталась довольна
                    </p>
                </div>
                <div class="reviews_comment">
                    <p class="reviews_content">
                        "У меня очень чувствительная кожа головы и волосы ломкие и после тонирования на удивление с ними ничего не случилось, за что мастерам спасибо! Мастер Алена конечно иногда грубо расчесывала, но она наверное просто увлеклась процессом, я надеюсь))"
                    </p>
                </div>
            </div>
        </div>
        <!--  footer  -->
<?php require_once('app/include/footer.php'); ?>