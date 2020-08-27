<!DOCTYPE html>
<html>
    <head>
        <?php
        $title='Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-1. Простейшая программа на PHP. Конвертация статического контента в динамический.';
        echo '<title>'.$title.'</title>';
        ?>
        <meta charset="utf-8">
        <link href="css\style1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header>
            <ul>
                <li><a href="<?php

                    $name='Главная';
                    $link='index1.php';
                    $current_page=true;

                    echo $link;

                ?>"<?php
                    
                    if ($current_page)
                        echo 'class="current"';
                    
                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                <li><a href="<?php

                    $name='Виды суккулентов';
                    $link='index2.php';
                    $current_page=false;

                    echo $link;

                ?>"<?php

                    if ($current_page)
                        echo 'class="current"';

                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                <li><a href="<?php

                    $name='Уход за суккулентам';
                    $link='index3.php';
                    $current_page=false;

                    echo $link;

                ?>"<?php

                    if ($current_page)
                        echo 'class="current"';

                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                </ul>
            </header>

            <h1>Суккуленты</h1>
            <?php
            if (date('s') % 2 === 0)
                $pic1='1';
            else
                $pic1='2';
            echo '<img src="img/'.$pic1.'.jpg" class="first">';
            ?>
            <p>Суккуленты — группа растений родом из засушливых областей Южной Америки, Мадагаскара и Африки с большими природными перепадами температур. Всех их объединяет одна особенность, хорошо знакомая нам благодаря кактусам: способность запасать воду на довольно продолжительное время и в период засухи экономно её расходовать. Как правило, именно этот факт привлекает «чайников»: суккуленты стоически переживают и неправильных уход, и несколько пропущенных поливов.</p>
            <h2>Плюсы и минусы суккулентов</h2>
            <table height="150px" border="1px solid grey" width="1000px">
                <?php
                echo
                '<tr>
                    <td></td> <td>Требуют частого полива</td> <td>Небольшого размера</td> <td>Всегда великолепно выглядят</td>
                    </tr>'
                ?>
                <tr>
                    <td><?php echo 'Суккуленты' ?></td> <td><?php echo '-' ?></td> <td><?php echo '+' ?></td> <td><?php echo '+' ?></td>
                    </tr>
                <tr>
                    <td>Другие растения</td> <td>+</td> <td>-</td> <td>-</td>
                    </tr>
                </table>
            <?php
            if (date('s') % 2 === 0)
                $pic2='2';
            else
                $pic2='1';
            echo '<img src="img/'.$pic2.'.jpg" class="second">';
            ?>
            <h2 style="margin-top: 200px;">Почему вам нужно приобрести сукккулент</h2>
            <p>Самая главная особенность суккулентов – их способность накапливать влагу и выживать на самых сухих неплодородных почвах при практически полном отсутствии увлажнения на самом жарком иссушающем солнце. Наибольшее количество суккулентов произрастает в Африканских пустынях. Эти растения широко распространены в Центральной и Южной Америке. Может показаться странным, но суккуленты можно встретить и у нас, в Центральной Европе. Многие встречали очиток едкий (рисунок сверху) – мелкое растение с желтыми цветками, которое легко найти на песчаных малоплодородных почвах, где не растет больше почти ничего. Также вспомним хорошо всем известное растение – молодило, которое также является типичным суккулентом средней полосы.</p>

        <footer>
            <?php
            date_default_timezone_set("Europe/Moscow");
            echo '<p style="line-height: unset;">Сформировано '.date("d.m.Y").' в '.date("H-i:s").'</p>';
            ?>
            </footer>
        </body>
    </html>