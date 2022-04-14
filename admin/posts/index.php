<?php
include('../../path.php');
require_once('../../app/include/header_admin.php');
include('../../app/controllers/posts.php');
?>
    <div class="container">
        <br><br><br><br><br><br>
        <?php include '../../app/include/sidebar-admin.php'?>
            <div class="posts col-9">
                <div class="posts__buttons">
                    <a href="<?php echo BASE_URL . 'admin/posts/create.php';?>" class=" posts__btn_add">Добавить пост</a>
                    <a href="<?php echo BASE_URL . 'admin/posts/index.php';?>" class="posts__btn">Управление постами</a>
                </div>
                <div class="row posts__title-table">
                    <h4 class="posts__t">Управление статьями</h4>
                    <div class="posts__id col-1">ID</div>
                    <div class="posts__title col-4">Название</div>
                    <div class="posts__author col-2">Автор(id)</div>
                    <div class="posts__control col-3">Управление</div>
                    <div class="posts__control col-2">Статус</div>
                </div>
                <?php foreach($postsJoin as $key => $post): ?>
                <div class="row posts__post">
                    <div class="posts__id col-1"><?=$post['id']?></div>
                    <div class="posts__title col-4"><?=$post['title']?></div>
                    <div class="posts__author col-2"><?=$post['username']?></div>
                    <div class="posts__red col-1"><a href="#" class="posts__link">edit</a></div>
                    <div class="posts__del col-2"><a href="#" class="posts__link">delete</a></div>
                    <?php if($post['status']): ?>
                        <div class="posts__status col-2"><a href="#" class="posts__link">в черновик</a></div>
                    <?php else: ?>
                        <div class="posts__status col-2"><a href="#" class="posts__link">опубликовать</a></div>
                    <?php endif;?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

<!--  footer  -->
<?php require_once('../../app/include/footer_admin.php'); ?>