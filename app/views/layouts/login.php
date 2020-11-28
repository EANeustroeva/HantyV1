<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="/favicon.ico">
    <meta name="theme-color" content="#563d7c">
    <script src="https://kit.fontawesome.com/4098fb5e0f.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="/signin.css" rel="stylesheet">

</head>

<body class="text-center">
    <img class="logo" src="/logo.png" alt="" height="100">
    <form class="form-signin" action="/user/login" method="post">
        <div class="form-in">
            <h1 class="h4 mb-3">ВОЙТИ В АККАУНТ</h1>
            <div class="input-group mb-3">
                <input name="login" type="text" id="inputEmail" class="form-control" placeholder="ivanova@ya.ru" required autofocus>
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-keyboard"></i></span>
                </div>
            </div>
            <div class="input-group mb-5">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="password" required>
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-key"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex">
                    <a class="mt-auto" href="#">Забыли пароль?</a>
                </div>
                <div class="col">
                    <button class="btn btn-primary btn-block" type="submit">Войти</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>