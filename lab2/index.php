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
                    $type = 'E';

                    $min_value = -2000; // минимальное и максимальное значение ФУНКЦИИ
                    $max_value = 800;

                    $sum = 0;
                    $count = 0;

                    $tr = 1;

                    switch ($type)
                    {
                        case 'B':
                            echo '<ul>';
                            break;
                        case 'C':
                            echo '<ol>';
                            break;
                        case 'D':
                            echo '<table rules="all"> <tr> <th>№</th> <th>x</th> <th>f(x)</th> </tr>';
                            break;
                    }
                    

                    $i = 0;
                    
                    do
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
                        
                        switch ($type)
                        {
                            case 'A':
                                echo 'f('.$x.')='.$f;
                                if ($i < $encounting-1)
                                    echo '<br>';
                                break;
                            case 'B':
                                echo '<li>f('.$x.')='.$f.'</li>';
                                break;

                            case 'C':
                                echo '<li>f('.$x.')='.$f.'</li>';
                                break; 

                            case 'D':
                                echo '<tr> <td>'.$tr.'</td> <td>'.$x.'</td> <td>'.$f.'</td> </tr>';
                                $tr++;
                                break;

                            case 'E':
                                echo '<div class="el">f('.$x.')='.$f.'</div>';
                                break;
                        }

                        if ($i == 0)
                            $min_el = $f;
                            $max_el = $f;
                        
                        if ($f > $max_el)
                            $max_el = $f;
                        
                        if ($f < $min_el)
                            $min_el = $f;

                        $sum += $f;
                        $count++;

                        $i++;
                        $x += $step;
                    }
                    while ($i < $encounting && $f <= $max_value && $f >= $min_value);

                    switch ($type)
                    {
                        case 'B':
                            echo '</ul>';
                            break;
                        case 'C':
                            echo '</ol>';
                            break;
                        case 'D':
                            echo '</table>';
                            break;
                    }

                    echo '<br>Максимальное значение функции на заданном промежутке: '.$max_el.'<br>';
                    echo 'Минимальное значение функции на заданном промежутке: '.$min_el.'<br>';
                    echo 'Cреднее арифметическое всех значений функции на заданном промежутке: '.$sum/$count.'<br>';
                    echo 'Сумма всех значений функции на заданном промежутке: '.$sum;
                ?>
            </main>

        <footer>
            <?php
            echo 'Тип вёрстки: '.$type;
            ?>
            </footer>
        </body>
    </html>