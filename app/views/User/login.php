<style>
body {
	
    background: url(/bg.png) !important;
    background-size: cover !important;

}
.img-fluid {
	max-width:520px !important;
	margin-left: -67px;
}
.reg-box .text {display:inline-block;
				font-family: Proxima Nova;
				font-style: normal;
				font-weight: 600;
				font-size: 14px;
				line-height: 17px;
				color: #FFFFFF;
				padding-right:55px;}
.reg-box {float:right;
			padding-right:55px;
			padding-top:31px;}				
.reg-box .button {display:inline-block;
				 background: url(/Button-login.png) !important;
				 width:154px;
				 Height:33px;
}
</style>
<div class="reg-box">
<div class="text">Не авторизированы?</div>
<div class="button">Получить доступ</div>
</div>

<div class="login-box">
    <div class="login-logo mb-4">
        <a href="/"><img class="img-fluid" width="520" src="/img/Hanty_001 1.png" alt=""></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <p class="text-bold">Войти</p>

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Ошибка!</h4>
                <?= $_SESSION['error'];
                unset($_SESSION['error']) ?>
            </div>
        <?php endif; ?>

        <form action="/user/login" method="post">
            <div class="form-group has-feedback mb-4">
                <input type="text" name="login" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback mb-4">
                <input type="password" name="password" class="form-control" placeholder="Пароль">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group" style="margin-top: 4em">
                <button type="submit" class="btn btn-raised btn-primary btn-block py-3">Войти</button>
            </div>
            <div class="form-group text-center">
                <a href="/#" class="text-dark">Забыли пароль?</a>
            </div>
        </form>

        <!--        <a href="#">I forgot my password</a><br>-->
        <!--        <a href="register.html" class="text-center">Register a new membership</a>-->

    </div>
    <div class="text-center mt-4">
        <a class="text-dark" href="/#">Новый пользователь? <b>Зарегистрируйтесь!</b></a>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->