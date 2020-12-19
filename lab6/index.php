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
            if (isset($_POST['A'])) //если в форму были введены данные
            {
                ...
            }
            ?>
            <form name="A">
                <label for="name">ФИО<span style="color: red;"> *</span></label> <input required type="text" id="name"></input><br>
                <label for="group">Номер группы<span style="color: red;"> *</span></label> <input required type="number" id="group"></input><br>
                <label for="value_A">Значение A<span style="color: red;"> *</span></label> <input required type="number" id="value_A"></input><br>
                <label for="value_B">Значение B<span style="color: red;"> *</span></label> <input required type="number" id="value_B"></input><br>
                <label for="value_C">Значение C<span style="color: red;"> *</span></label> <input required type="number" id="value_C"></input><br>
                <label for="answer">Ваш ответ<span style="color: red;"> *</span></label> <input required type="number"id="answer"> </input><br>
                <label for="e-mail">Ваш e-mail</label> <input></input type="e-mail" id="e-mail"><br>

                <label for="about">Немного о себе</label> <textarea id="about"></textarea><br>
                <br>

                <div class="select">
                <input type="radio" style="margin-right: 5px;" id="case1" name="case"></input> <label for="case1">Площадь треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case2" name="case"></input> <label for="case2">Периметр треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case3" name="case"></input> <label for="case3">Объём паралллелепипеда</label><br>
                <input type="radio" style="margin-right: 5px;" id="case4" name="case"></input> <label for="case4">Среднее арифметическое</label><br>
                <input type="radio" style="margin-right: 5px;" id="case5" name="case"></input> <label for="case5">Произведение</label><br>
                <input type="radio" style="margin-right: 5px;" id="case6" name="case"></input> <label for="case6">Сумма</label><br>
                    </div>
                <br>

                <input type="checkbox" style="margin-right: 5px;" id="result_e-mail"> <label style="float: unset;">Отправить результат теста по e-mail</label><br>
                <br>

                <input type="radio"  style="margin-right: 5px;" id="browser" name="version"></input> <label for="browser" style="float: unset;">Версия для просмотра в браузере</label><br>
                <input type="radio"  style="margin-right: 5px;" id="print" name="version"></input> <label for="print" style="float: unset;">Версия для печати</label><br>
                <br>

                <input type="button" id="check" value="Проверить"></input>
                </form>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>