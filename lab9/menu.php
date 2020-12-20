<div id="menu" class="menu">
    <?php
        if (!isset($_GET['p']))
            $_GET['p'] = 'viewer';    // по умолчанию режим "просмотр"
        
        echo '<a href="/lab9/index.php/?p=viewer"'; // вывод 1-го пункта меню
        if ($_GET['p'] == 'viewer')
            echo 'class="selected"';    // если selected то выделить
        echo '>Просмотр</a>';
        if ($_GET['p'] == 'viewer')
        {
            echo '<div id="submenu" class="submenu">';  // вывести подменю
            echo '<a href="/lab9/index.php/?p=viewer&sort=by_id"';
            if (!isset($_GET['sort']) || $_GET['sort'] == 'by_id')
                echo 'class="selected"';   // 1-ый пункт подменю (selected по умолчанию)
            echo '>По умолчанию</a><br>';
            echo '<a href="/lab9/index.php/?p=viewer&sort=by_surname"';
            if (isset($_GET['sort']) && $_GET['sort'] == 'by_surname')
                echo 'class="selected"'; // 2-ой пункт подменю
            echo '>По фамилии</a><br><br>';
            echo '</div>';
        }
        else
            echo '<br><br>';

        echo '<a href="/lab9/index.php/?p=add"';    // вывод 2-го пункта меню
        if ($_GET['p'] == 'add')
            echo 'class="selected"';    // выделить если selected
        echo '>Добавление записи</a><br><br>';

        echo '<a href="/lab9/index.php/?p=edit"';    // вывод 3-го пункта меню
        if ($_GET['p'] == 'edit')
            echo 'class="selected"';    // выделить если selected
        echo '>Редактирование записи</a><br><br>';

        echo '<a href="/lab9/index.php/?p=delete"';    // вывод 4-го пункта меню
        if ($_GET['p'] == 'delete')
            echo 'class="selected"';    // выделить если selected
        echo '>Удаление записи</a>';

        if (isset($_GET['p']) && $_GET['p'] != 'viewer' && $_GET['p'] != 'add' && $_GET['p'] != 'edit' && $_GET['p'] != 'delete')
            exit;
    ?>