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
    <link href="/style.css" rel="stylesheet">

</head>
<?php
$menu = [
    // 'index' => "fa fa-list-alt",
    'page' => "fa fa-briefcase",
    'index' => "fa fa-paperclip",
    'page3' => "fa fa-list",
    'page4' => "fa fa-puzzle-piece",
    'page5' => "fa fa-check-circle",
    'page6' => "fa fa-dot-circle",
];
?>

<body>
    <nav class="navbar navbar-light bg-white" style="z-index: 100;">
        <a href="/"><img src="/logo.png" alt="" width="300"></a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" value="Java разработчик">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Вперед</button>
        </form>

        <div class="ml-auto">
            <a type="button" class="calendar" data-toggle="modal" data-target="#calendar" href="#calendar"><img src="/img/calendar.svg" alt="">&nbsp;Календарь</a>
            <a class="ml-5" href="/user/logout" class=nav-link">Выйти</a>
        </div>
    </nav>

    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <?php foreach ($menu as $url => $item) : ?>
                    <li><a class="<?= $url == $route['action'] ? 'active' : '' ?>" href="<?= $url == 'index' ? '/' : $url ?>"><i class="<?= $item ?>"></i></a></li>
                <?php endforeach; ?>
                <li><img style="margin-left: -40px" src="/img/Avatar.png" alt=""></li>
                <li><a href="#" data-toggle="modal" data-target="#config"><img src="/img/config.svg" alt="" style="width:1.2em"></a></li>
            </ul>
        </div>
        <div class="content pt-3">
            <?= $content ?>
        </div>
    </div>

    <div class="modal fade" id="calendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="background: no-repeat;border: none;">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                <img src="/img/Calendar.png" alt="">
            </div>
        </div>
    </div>
    <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="display: block;text-align: center;padding: 1em;">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                <img src="/img/modal (2).png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php
    foreach ($scripts as $script) {
        echo $script;
    }
    ?>
</body>

</html>