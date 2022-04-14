<?php
include('../../path.php');
require_once('../../app/include/header_admin.php');
?>
<div class="container">
    <br><br><br><br><br><br>
    <?php include '../../app/include/sidebar-admin.php'?>
        <div class="posts col-9">
            <div class="posts__buttons">
                <a href="<?php echo BASE_URL . 'admin/users/create.php';?>" class="posts__btn_add">Создать пользователя</a>
                <a href="<?php echo BASE_URL . 'admin/users/index.php';?>" class="posts__btn">Управление пользователями</a>
            </div>
            <div class="row posts__title-table">
                <h4 class="posts__t">Управление пользователями</h4>
                <div class="posts__id col-1">ID</div>
                <div class="posts__title col-5">Логин пользователя</div>
                <div class="posts__title col-2">Роль</div>
                <div class="posts__control col-4">Управление</div>
            </div>
            <div class="row posts__post">
                <div class="posts__id col-1">1</div>
                <div class="posts__title col-5">Nika</div>
                <div class="posts__title col-2">Admin</div>
                <div class="posts__red col-2"><a href="#" class="posts__link">edit</a></div>
                <div class="posts__del col-2"><a href="#" class="posts__link">delete</a></div>
            </div>
            <div class="row posts__post">
                <div class="posts__id col-1">2</div>
                <div class="posts__title col-5">Dasha</div>
                <div class="posts__title col-2">Not</div>
                <div class="posts__red col-2"><a href="#" class="posts__link">edit</a></div>
                <div class="posts__del col-2"><a href="#" class="posts__link">delete</a></div>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php require_once('../../app/include/footer_admin.php'); ?>
