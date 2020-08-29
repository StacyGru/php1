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
                    $x = -10;
                    $encounting = 10000;
                    $step = 2;
                    $type = 'B';

                    $min_value = -2000; // минимальное и максимальное значение ФУНКЦИИ
                    $max_value = 800;

                    if ($type == 'B')
                        echo '<ul>';

                    $i = 0;
                    $f = 0;

                    while ($i < $encounting && (($f <= $max_value && $f >= $min_value) || !$i)) // !$i это логическое отрицание, т.е. TRUE если $i FALSE, т.е. в данном случае = 0 (первое вычисление)
                    {
                        if ($x <= 10)
                            $f = ($x**2)*($x-2)+4; // $a ** $b это возведение числа $a в степень $b
                        else
                        if ($x > 10 && $x < 20)
                            $f = 11*$x-55;
                        else
                        {
                            if ($x == 100) // == равно, не присваивание
                                $f = 'error';
                            else
                            if ($x >= 20)
                                $f = ($x-100)/(100-$x)-$x/10+2;
                        }
                        
                        if ($type == 'A')
                        {
                            echo 'f('.$x.')='.$f;
                            if ($i < $encounting-1)
                                echo '<br>';
                        }
                        else
                        if ($type == 'B')
                        {
                            echo '<li>f('.$x.')='.$f.'</li>';
                        }

                        $i++;
                        $x += $step;
                    }

                    if ($type == 'B')
                        echo '</ul>';
                ?>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>