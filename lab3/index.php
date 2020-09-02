<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</u></h1>
            </header>

        <main>

            <div class="container">

                <div class="item window">
                    <?php
                        if (!isset($STORE))
                            $STORE = '';

                        if (!isset($_GET['num']))
                            $STORE .= $_GET['num'];

                        if (!isset($_GET['reset']))
                            $STORE = '';

                        echo $STORE;
                    ?>
                    </div>
                <a class="item num" href="/lab3/index.php/?num=1">1</a>
                <a class="item num" href="/lab3/index.php/?num=2">2</a>
                <a class="item num" href="/lab3/index.php/?num=3">3</a>
                <a class="item num" href="/lab3/index.php/?num=4">4</a>
                <a class="item num" href="/lab3/index.php/?num=5">5</a>
                <a class="item num" href="/lab3/index.php/?num=6">6</a>
                <a class="item num" href="/lab3/index.php/?num=7">7</a>
                <a class="item num" href="/lab3/index.php/?num=8">8</a>
                <a class="item num" href="/lab3/index.php/?num=9">9</a>
                <a class="item num" href="/lab3/index.php/?num=0">0</a>
                <a class="item reset" href="/lab3/index.php/?reset=Y">СБРОС</a>
                
                </div>
                
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>