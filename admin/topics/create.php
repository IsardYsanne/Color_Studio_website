<?php
include('../../path.php');
include('../../app/controllers/topics.php');
require_once('../../app/include/header_admin.php');
?>
<div class="container">
    <br><br><br><br><br><br>
    <?php include '../../app/include/sidebar-admin.php'?>
        <div class="posts col-9">
            <div class="posts__buttons" style="justify-content: flex-start">
                <a href="<?php echo BASE_URL . 'admin/topics/index.php';?>" class="posts__btn">Управление категориями</a>
            </div>
            <div class="row posts__title-table">
                <h4 class="posts__t">Добавление категории</h4>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post" class="add-post__form">
                    <div class="col">
                        <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Title" aria-label="Название категории">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label add-post__label-content">Описание категории</label>
                        <textarea name="description" class="form-control topics-textarea" id="editor" rows="6"><?=$description;?></textarea>
                    </div>
                    <div class="input-group col add-post__upload">
                        <input type="file" class="form-control add-post__file" id="inputGroupFile02">
                        <label class="input-group-text add-post__file-upload" for="inputGroupFile02">Загрузить</label>
                    </div>
                    <div class="col">
                        <button name="topic-create" class="btn add-post__btn" type="submit">Сохранить категорию</button>
                    </div>
                    <div class="col err_block">
                        <p class="error_mess"> <?=$errorMessage?> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php require_once('../../app/include/footer_admin.php'); ?>
