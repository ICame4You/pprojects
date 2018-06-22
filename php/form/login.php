<?php include 'header.php' ?>

<?php
    $login = isset($_POST['login']) ? $_POST['login'] : "";
    $login_errors = [
        1 => 'Неправильный логин'
    ];
    if (isset($_GET['error_id'])) { ?>
        <div class="alert alert-warning">
            <strong>Error!</strong>
            <?=isset($login_errors[$_GET['error_id']]) ? $login_errors[$_GET['error_id']] : ''?>
            <span class="close" data-dismiss="alert">×</span>
        </div>
    <?php } ?>

<form method="POST" action="auth.php" class="form-bordered">
    <div class="container wrapper">
        <div class=" p-30 bg-white">
            <div class="form-group row">
                <label for="login" class="col-md-4 control-label">Логин</label>
                <div class="col-md-8">
                    <input id="login" class="form-control" name="login" value="<?=$login?>"/>
                </div>
            </div>
            <!--<div class="form-group row">
                <label for="pass" class="col-md-4 control-label">Пароль</label>
                <div class="col-md-8">
                    <input type="password" id="pass" class="form-control" name="pass" />
                </div>
            </div>-->
        </div>
    </div>
</form>

<?php include 'footer.php' ?>