<form name="form_add" method="post" action="/lab9/index.php/?p=add">
    <label for="surname">Фамилия</label> <input type="text" id="surname" name="surname"></input><br>
    <label for="name">Имя</label> <input type="text" id="name" name="name"></input><br>
    <label for="second_name">Отчество</label> <input type="text" id="second_name" name="second_name"></input><br>
    <label for="sex">Пол</label> <select id="sex" name='sex'>
        <option value="женский">женский</option>
        <option value="мужской">мужской</option>
        </select><br>
    <label for="date_of_birth">Дата рождения</label> <input type="date" id="date_of_birth" name="date_of_birth"></input><br>
    <label for="phone">Телефон</label> <input type="text" id="phone" name="phone"> </input><br>
    <label for="address">Адрес</label> <input type="text" id="address" name="address"> </input><br>
    <label for="e-mail">E-mail</label> <input type="e-mail" id="e-mail" name="e-mail"></input><br>
    <label for="note">Комментарий</label> <textarea id="note" name="note"></textarea><br>
    <input type="submit" name="button" value="Добавить запись">
    </form>
<?php
    if (isset($_POST['button']) && $_POST['button'] == 'Добавить запись')
    {
        $mysqli = mysqli_connect('std-mysql', 'std_940', '12345678', 'friends');

        if (mysqli_connect_errno()) // если не удаётся подключиться выводим сообщение
            return 'Ошибка подключения к БД: '.mysqli_connect_error();

        $sql_res = mysqli_query($mysqli, 'INSERT INTO friends VALUES ("'.$_POST['id'] = NULL.'",
                                                                        "'.htmlentities($_POST['surname']).'",
                                                                        "'.htmlentities($_POST['name']).'",
                                                                        "'.htmlentities($_POST['second_name']).'",
                                                                        "'.htmlentities($_POST['sex']).'",
                                                                        "'.htmlentities($_POST['date_of_birth']).'",
                                                                        "'.htmlentities($_POST['phone']).'",
                                                                        "'.htmlentities($_POST['address']).'",
                                                                        "'.htmlentities($_POST['e-mail']).'",
                                                                        "'.htmlentities($_POST['note']).'")');
                                
        if (mysqli_errno($mysqli))
            echo '<div class="error">Запись не добавлена: '.mysqli_error($mysqli).'</div>';
        else
            echo '<div class="ok">Запись добавлена</div>';
    }
?>