<div id="menu">
    <?php
        if (!is_array($_GET['p']))
            $_GET['p'] = 'view';    // по умолчанию режим "просмотр"

        echo '<a href="/lab9/index.php/?p=viewer"'; // вывод 1-го пункта меню
        if ($_GET['p'] == 'viewer')
        {
            echo 'class="selected"';    // если selected то выделить
            echo '<div id="submenu">';  // и вывести подменю
            echo '<a href="/lab9/index.php/?p=viewer&sort=by_id"';
            if (!isset($_GET['sort']) || $_GET['sort'] == 'by_id')
                echo '>По умолчанию</a>';   // 1-ый пункт подменю (selected по умолчанию)
            echo '<a href="/lab9/index.php/?p=viewer&sort=by_surname"';
            if (isset($_GET['sort']) && $_GET['sort'] == 'by_surname')
                echo '>По фамилии</a>'; // 2-ой пункт подменю
        }
        echo '>Просмотр</a>';
        

        echo '<a href="/lab9/index.php/?p=add"';    // вывод 2-го пункта меню
        if ($_GET['p'] == 'add')
            echo 'class="selected"';    // выделить если selected
        echo '>Добавление записи</a>';
    ?>

<a>Просмотр</.a>
<a>Добавление записи</a>
<a>Редактирование записи</a>
<a>Удаление записи</a>