<?php
include('../../path.php');
require_once('../../app/include/header_admin.php');
?>
<div class="container">
    <br><br><br><br><br><br>
    <?php include '../../app/include/sidebar-admin.php'?>
        <div class="posts col-9">
            <div class="posts__buttons" style="justify-content: flex-start">
                <a href="<?php echo BASE_URL . 'admin/users/index.php';?>" class="posts__btn">Управление пользователями</a>
            </div>
            <div class="row posts__title-table">
                <h4 class="posts__t">Создать пользователя</h4>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post" class="add-post__form">
                    <div class="mb-3 col">
                        <label for="formGroupExampleInput" class="form-label">Введите Ваш логин</label>
                        <input name="login" value="<?=$login?>" type="text" class="form-control login_input" id="formGroupExampleInput">
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputEmail1" class="form-label">Введите Вашу почту</label>
                        <input name="email" value="<?=$email?>" type="email" class="form-control mail_input" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
                        <input name="password" type="password" class="form-control pass_input" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="password2" type="password" class="form-control pass_input" id="exampleInputPassword2">
                    </div>
                    <select class="form-select" aria-label="select a topic" style="margin-bottom: 16px">
                        <option selected>Является админом?</option>
                        <option value="1">Нет</option>
                        <option value="2">Да</option>
                    </select>
                    <div class="col">
                        <button class="btn add-post__btn" type="submit">Создать юзера</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php require_once('../../app/include/footer_admin.php'); ?>
