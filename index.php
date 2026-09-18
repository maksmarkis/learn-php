<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Учим PHP 8.5</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php"></a>Главная</li>
            <li><a href="index.php?p=fundamentals_syntax"></a>Основы синтаксиса</li>
            <li><a href="index.php?p=independent_work"></a>Самостоятельная работа</li>
            <li><a href="index.php?p=form_processing"></a>Отправка данных на сервер</li>
            <li><a href="index.php?p=form"></a>Форма</li>
        </ul>
    </nav>
</header>

<main>
    <!-- Начало PHP-скрипта -->
    <?php
    $page = $_GET['p'] ?? null;
    if ($page) {
       $path = "pages/{$page}.php";
       if(file_exists($path)) {
           include $path;
       } else{
           echo"404 <br> Страница не найдена, резиновые флепки";
       }
    } else{
        include "pages/main.php";
    }

    ?>
    <!-- Конец PHP-скрипта -->
</main>

<footer>Подвал</footer>

</body>
</html>