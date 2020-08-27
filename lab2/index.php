<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-2. Циклические алгоритмы. Условия в алгоритмах. Табулирование функции. Вариант №9.</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <style>
            <?php
            require "style.css";    // подключать стили вот так !!!
            ?>
            </style>

        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-2. Циклические алгоритмы. Условия в алгоритмах. Табулирование функции.</u><br>
                <b>Вариант №9.</b></h1>
            </header>

        <main lang="en">
            <?php
                    $start_value = -10;
                    $encounting = 10000;
                    $step = 2;
                    $type = 'A';

                    $x = $start_value;

                    for ($i=0; $i < $encounting; $i++)
                    {
                        if ($x <= 10)
                            $f = $x*$x*($x-2)+4;
                        else
                        if ($x > 10 && $x < 200)
                            $f = 11*$x-55;
                        else
                        if ($x >= 20)
                            $f = ($x-100)/(100-$x)-$x/10+2;
                        
                        echo 'f('.$x.')='.$f.'<br>'; //точки нужны для склеивания нескольких значений для вывода в одну строку через echo

                        $x += $step; // += это сложение
                    }
                ?>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>