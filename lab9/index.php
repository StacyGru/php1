<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №B-1. Основы баз данных и использования программных модулей.  
Записная книжка. </title>
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
                <u>Лабораторная работа №B-1. Основы баз данных и использования программных модулей. Записная книжка. </u>
                </h1>
            </header>

        <main>
        
            <?php
                require "menu.php";

                if ($_GET['p'] == 'viewer')
                    include 'viewer.php';
                else
                if ($_GET['p'] == 'add')
                    include 'add.php';
                else
                if ($_GET['p'] == 'edir')
                    include 'edit.php';
                else
                if ($_GET['p'] == 'delete')
                    include 'delete.php';
            ?>

            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>