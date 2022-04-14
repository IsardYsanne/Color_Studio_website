<?php
include('../../path.php');
include('../../app/controllers/topics.php');
require_once('../../app/include/header_admin.php');
?>
<div class="container">
    <br><br><br><br><br><br>
    <?php include '../../app/include/sidebar-admin.php'?>
        <div class="posts col-9">
            <div class="posts__buttons">
                <a href="<?php echo BASE_URL . 'admin/topics/create.php';?>" class="posts__btn_add">Создать категорию</a>
                <a href="<?php echo BASE_URL . 'admin/topics/index.php';?>" class="posts__btn">Управление категориями</a>
            </div>
            <div class="row posts__title-table">
                <h4 class="posts__t">Управление категориями</h4>
                <div class="posts__id col-2">ID</div>
                <div class="posts__title col-5">Название</div>
                <div class="posts__control col-5">Управление</div>
            </div>
            <?php foreach($topics as $key => $topic): ?>
            <div class="row posts__post">
                <div class="posts__id col-2"><?=$key + 1;?></div>
                <div class="posts__title col-5"><?=$topic['name']?></div>
                <div class="posts__red col-3"><a href="edit.php?id=<?=$topic['id'];?>" class="posts__link">edit</a></div>
                <div class="posts__del col-2"><a href="edit.php?delete_id=<?=$topic['id'];?>" class="posts__link">delete</a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!--  footer  -->
    <?php require_once('../../app/include/footer_admin.php'); ?>
