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

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col"><img src="/logo.png" alt="" width="300"></div>
            <div class="col"><input type="text" value="Java разработчик"></div></div>
        </div>
        <div class="wrapper">
            <div class="sidebar">
                <ul>
                    <li><a href="#"><i class="fas fa-list-alt"></i></a></li>
                    <li><a href="#"><i class="fas fa-briefcase"></i></a></li>
                    <li><a href="#"><i class="fas fa-paperclip"></i></a></li>
                    <li><a href="#"><i class="fas fa-list"></i></a></li>
                    <li><a href="#"><i class="fas fa-puzzle-piece"></i></a></li>
                    <li><a href="#"><i class="fas fa-check-circle"></i></a></li>
                    <li><a href="#"><i class="fas fa-dot-circle"></i></a></li>
                </ul>
            </div>
            <div class="content">
                <table class="table">
                    <tr>
                        <td>Должность</td>
                        <td>ФИО</td>
                        <td><i class="far fa-star"></i></td>
                        <td>Этап</td>
                        <td>Дата</td>
                        <td>
                            <div class="pnl d-flex">
                                <i class="fa fa-bars mr-2"></i>
                                <i class="fa fa-th mr-2"></i>
                                <div>Обязательные задачи</div>
                            </div>
                        </td>
                    </tr>
                    <?php for ($i=0;$i<10;$i++): ?>
                    <tr>
                        <td>Java Разработчик</td>
                        <td>Иванов Иван Иванович</td>
                        <td>150</td>
                        <td>Тестирование</td>
                        <td>10.12.2020</td>
                        <td></td>
                    </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>