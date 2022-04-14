<?php
include('../../path.php');
require_once('../../app/include/header_admin.php');
include('../../app/controllers/posts.php');
?>
<div class="container">
    <br><br><br><br><br><br>
    <?php include '../../app/include/sidebar-admin.php'?>
        <div class="posts col-9">
            <div class="posts__buttons" style="justify-content: flex-start">
                <a href="<?php echo BASE_URL . 'admin/posts/index.php';?>" class=" posts__btn">Управление постами</a>
            </div>
            <div class="row posts__title-table">
                <h4 class="posts__t">Добавление записи</h4>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post" class="add-post__form">
                    <div class="col">
                        <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label add-post__label-content">Содержимое записи</label>
                        <textarea name="content" id="editor" class="form-control posts-textarea" rows="6"></textarea>
                    </div>
                    <div class="input-group col add-post__upload">
                        <input name="img" type="file" class="form-control add-post__file" id="inputGroupFile02">
                        <label class="input-group-text add-post__file-upload" for="inputGroupFile02">Загрузить</label>
                    </div>
                    <select name="topic" class="form-select" aria-label="select a topic">
                        <option selected>Выберите раздел темы</option>
                        <?php foreach($topics as $key => $topic): ?>
                            <!--подсоединяем таблицу topics к select-->
                            <option value="<?=$topic['id']?>"><?=$topic['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="col col-6">
                        <input type="checkbox" name="publish" id="publish" value="1">
                        <label for="publish">Опубликовать</label>
                    </div>
                    <div class="col col-6">
                        <button name="add_post" class="btn add-post__btn" type="submit">Добавить запись</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php require_once('../../app/include/footer_admin.php'); ?>
