<?php include 'header.php' ?>

<form method="POST" action="auth.php" class="form-bordered">
    <div class="container wrapper">
        <div class=" p-30 bg-white">
            <div class="form-group row">
                <label for="login" class="col-md-4 control-label">Логин</label>
                <div class="col-md-8">
                    <input id="login" class="form-control" name="login" />
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