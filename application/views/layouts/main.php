<!doctype html>
<html lang="ru">
<head>
    <title>FREERIDE BOARDSHOP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand">
        <img src="../../../images/icon-longboard.png" width="30" height="30" class="d-inline-block align-top"/>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Женское</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Мужское</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Детское</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Магазины</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Ремонт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Блог</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><span class="oi oi-person"></span> Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Корзина</a>
            </li>
        </ul>

    </div>
</nav>

<div class="container-fluid">
    <div class="header">
        <div class="row">
            <div class="col-md-3">
                <h2>FREERIDE BOARDSHOP</h2>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                <form class="form-inline" method="get" action="/portfolio/index/">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><img src="../../../images/loupe.png" alt="Поиск"/ width="17" height="17"></span>
                        <input type="text" name="q" class="form-control" placeholder="Поиск" aria-describedby="basic-addon1">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="call">
                    <strong class="brand-phone">8 (916) 593-00-68</strong>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Перезвоните мне
                        </button>
                        <div class="dropdown-menu p-3" aria-labelledby="dropdownMenu1">
                            <h5>НЕ МОЖЕТЕ ДОЗВОНИТЬСЯ?</h5>
                            <p>Оставьте свой мобильный номер и наши операторы свяжутся с вами при первой возможности.</p>
                            <form class="form-inline" action="/portfolio/index/" method="post">
                                <div class="form-group">
                                    <label for="phone">Ваш телефон:</label>
                                    <div class="input-group">
                                        <select id="country" class="form-control">
                                            <option value="ru">+7</option>
                                            <option value="ua">+380</option>
                                            <option value="by">+375</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <button type="submit" class="btn btn-primary">Перезвоните мне</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row"></div>
    </div>
    <div class="content pb-5">
        <?php include 'application/views/' . $contentView . '.php'; ?>
    </div>
</div>

<footer class="bg-dark text-muted">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h5>Помощь</h5>
                <ul class="foot list-unstyled">
                    <li class="foot-item"><a href="#">Доставка</a></li>
                    <li class="foot-item"><a href="#">Оплата заказа</a></li>
                    <li class="foot-item"><a href="#">Возврат и гарантия</a></li>
                    <li class="foot-item"><a href="#">Обратная связь</a></li>
                    <li class="foot-item"><a href="#">Помощь в подборе</a></li>
                    <li class="foot-item"><a href="#">Таблица размеров</a></li>
                    <li class="foot-item"><a href="#">Ремонт</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-3">
                <h5>Информация</h5>
                <ul class="foot list-unstyled">
                    <li class="foot-item"><a href="#">Скидки</a></li>
                    <li class="foot-item"><a href="#">Гарантия лучшей цены</a></li>
                    <li class="foot-item"><a href="#">Преимущества</a></li>
                    <li class="foot-item"><a href="#">Привелегии партнеров</a></li>
                    <li class="foot-item"><a href="#">Управление подпиской</a></li>
                    <li class="foot-item"><a href="#">Оферта</a></li>
                    <li class="foot-item"><a href="#">Карта сайта</a></li>
                    <li class="foot-item"><a href="#">Политика конфедициальности</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-3">
                <h5>О компании</h5>
                <ul class="foot list-unstyled">
                    <li class="foot-item"><a href="#">О нас</a></li>
                    <li class="foot-item"><a href="#">Адреса магазинов</a></li>
                    <li class="foot-item"><a href="#">Реквизиты</a></li>
                    <li class="foot-item"><a href="#">Акции</a></li>
                    <li class="foot-item"><a href="#">Блог</a></li>
                    <li class="foot-item"><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <hr style="color: #868e96; background-color: #868e96;"/>
                <div class="copyright">
                    © FREERIDE BOARDSHOP, <?php echo date('Y')?>, Интернет-магазин FREERIDE BOARDSHOP – продажа сноубордов, лонгбордов, скейтбордов, вейкбордов, одежды и обуви для сноуборда.
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<!-- Подключение jQuery плагина Masked Input -->
<script src="../../../js/jquery.maskedinput.min.js"></script>
<script>
    jQuery (function ($) {
        $(function() {
            function maskPhone() {
                var country = $('#country option:selected').val();
                switch (country) {
                    case "ru":
                        $("#phone").mask("+7(999) 999-99-99");
                        break;
                    case "ua":
                        $("#phone").mask("+380(999) 999-99-99");
                        break;
                    case "by":
                        $("#phone").mask("+375(999) 999-99-99");
                        break;
                }
            }
            maskPhone();
            $('#country').change(function() {
                maskPhone();
            });
        });
    });
</script>
</body>
</html>