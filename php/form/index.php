<?php include 'header.php' ?>

<div id="content" class="content content-full-width">

        <?php
        $errors = [
            1 => 'Заполнены не все поля',
            2 => 'Вам не исполнилось 18',
            3 => 'Ссылка на сайт введена в неверном виде',
            4 => 'Загрузите фотографию с разрешением jpg/png/gif',
            5 => 'Фотография не должна превышать 200KB'
        ];

        if (isset($_GET['error_id'])) { ?>
            <div class="alert alert-warning">
                <strong>Error!</strong>
                <?=isset($errors[$_GET['error_id']]) ? $errors[$_GET['error_id']] : ''?>
                <span class="close" data-dismiss="alert">×</span>
            </div>
        <?php } ?>

        <form method="POST" action="handler.php" class="form-bordered" enctype="multipart/form-data">
            <!-- begin wrapper -->
            <div class="container wrapper">
                <div class=" p-30 bg-white">
                    <!-- begin form -->
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Фамилия *</label>
                        <div class="col-md-8">
                            <input class="form-control" name="surname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Имя *</label>
                        <div class="col-md-8">
                            <input class="form-control" name="name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Отчество</label>
                        <div class="col-md-8">
                            <input class="form-control" name="second_name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Фотография *</label>
                        <div class="col-md-8">
                            <input class="form-control" name="photo" type="file" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">День рождения *</label>
                        <div class="col-md-2">
                            <input class="form-control" name="birthday_day" placeholder="DD" />
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="birthday_month">
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" name="birthday_year" placeholder="YYYY" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Ссылка на сайт</label>
                        <div class="col-md-8">
                            <input class="form-control" name="url" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-md-4 control-label">Описание</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                    <!-- end form -->
                </div>
            </div>
            <!-- end wrapper -->
        </form>
    </div>

<?php include 'footer.php' ?>


