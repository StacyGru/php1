<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-6. Использование форм для передачи данных в программу РНР.  
Тест математических знаний.</title>
        <meta charset="utf-8">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-6. Использование форм для передачи данных в программу РНР. Тест математических знаний.</u><br>
            </header>

        <main>
            <?php
            if (isset($_POST['A'])) // если в форму были введены данные
            {
                switch ($_POST['case']) {
                    case 'case1':   // площадь треугольника
                        $p = ($_POST['A'] + $_POST['B'] + $_POST['C'])/2;
                        $result = sqrt($p*($p - $_POST['A'])*($p - $_POST['B'])*($p - $_POST['C']));
                        break;
                    case 'case2': // периметр треугольника
                        $result = $_POST['A'] + $_POST['B'] + $_POST['C'];
                        break;
                    case 'case3': // объём параллелепипеда
                        $result = $_POST['A'] * $_POST['B'] * $_POST['C'];
                        break;
                    case 'case4':   // среднее арифметическое
                        $result = round(($_POST['A'] + $_POST['B'] + $_POST['C'])/3, 2);
                        break;
                    case 'case5':   // квадрат суммы
                        $result = pow($_POST['A'] + $_POST['B'] + $_POST['C'], 2);
                        break;
                    case 'case6':   // сумма квадратов
                        $result = pow($_POST['A'], 2) + pow($_POST['B'], 2) + pow($_POST['C'], 2);
                        break;
                }
            }
            ?>
            <form name="A" method="post" action="/">
                <label for="name">ФИО<span style="color: red;"> *</span></label> <input required type="text" id="name"></input><br>
                <label for="group">Номер группы<span style="color: red;"> *</span></label> <input required type="text" id="group"></input><br>
                <label for="value_A">Значение A<span style="color: red;"> *</span></label> <input required type="text" id="value_A"></input><br>
                <label for="value_B">Значение B<span style="color: red;"> *</span></label> <input required type="text" id="value_B"></input><br>
                <label for="value_C">Значение C<span style="color: red;"> *</span></label> <input required type="text" id="value_C"></input><br>
                <label for="answer">Ваш ответ<span style="color: red;"> *</span></label> <input required type="text"id="answer"> </input><br>
                <label for="e-mail">Ваш e-mail</label> <input></input type="e-mail" id="e-mail"><br>

                <label for="about">Немного о себе</label> <textarea id="about"></textarea><br>
                <br>

                <div class="select">
                <input type="radio" style="margin-right: 5px;" id="case1" value="case1" name="case" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'yes'): ?>checked='checked'<?php endif; ?>></input> <label for="case1">Площадь треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case2" value="case2" name="case"></input> <label for="case2">Периметр треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case3" value="case3" name="case"></input> <label for="case3">Объём параллелепипеда</label><br>
                <input type="radio" style="margin-right: 5px;" id="case4" value="case4" name="case"></input> <label for="case4">Среднее арифметическое</label><br>
                <input type="radio" style="margin-right: 5px;" id="case5" value="case5" name="case"></input> <label for="case5">Квадрат суммы</label><br>
                <input type="radio" style="margin-right: 5px;" id="case6" value="case6" name="case"></input> <label for="case6">Сумма квадратов</label><br>
                    </div>
                <br>

                <input type="checkbox" style="margin-right: 5px;" id="result_e-mail"> <label style="float: unset;">Отправить результат теста по e-mail</label><br>
                <br>

                <input type="radio"  style="margin-right: 5px;" id="browser" name="version"></input> <label for="browser" style="float: unset;">Версия для просмотра в браузере</label><br>
                <input type="radio"  style="margin-right: 5px;" id="print" name="version"></input> <label for="print" style="float: unset;">Версия для печати</label><br>
                <br>

                <input type="submit" id="check" value="Проверить"></input>
                </form>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>