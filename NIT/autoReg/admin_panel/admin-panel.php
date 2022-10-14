<?php
require_once ("../vendor/connect.php");
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Панель администратора</title>
</head>
<body>
    <form action="" method="get">
        <!-- градиентное боковое меню -->
        <div class="form__menu">
            <ul class="list__content">
                <li type="submit">Пользователи</li>
                <hr>
                <button type="submit" name="sub__Users">Users</button>
                <hr>
                <li type="submit">Товары</li>
                <hr>
            </ul>
            <h3><a href="../../Main_1.php" class="main__menu-text">Главное меню</a></h3>
        </div>
        <!-- контент (поля для редактирования) -->

        <div class="form__content">
             <?php
        // if($_GET['sub__Users']){
            $dsn = 'mysql: host=localhost; dbname=test'; // dbname=test
            $db = new PDO($dsn, 'Essdes', '56768798_Essdes');
            $q = 'SELECT * FROM `users`';
            $result = $db->query($q);
            while ($row = $result->fetch()) { ?>
               <!-- id="id_c" -->
                     <!-- <a href="indexTwo.php?id='<?php //$row['id']?>'"> -->
                     <div class="form-category">
                         <?php echo $row['id'] .' '. $row['full_name'] .' '. $row['login'] .' '. $row['email'] .' '. $row['password'] .' '/*. $row['avatar']*/;?>
                    </div>
                     <!-- </a> -->
       <?php };
        // };
       ?>
        </div>
        <!-- -->
    </form>
</body>
</html>
