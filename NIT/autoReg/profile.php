<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- Профиль -->

    <form class="form__p">
        <ul>
            <li>
                <span> Перейти в <a href="../Main_1.php"> Главное меню</a></span>
            </li>
        </ul>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <?php
        if ($_SESSION['user']['full_name'] == 'Administrator') {?>
            <a href="admin_panel/admin-panel.php" class="admin-panel">Панель администратора</a>
        <?php
        }
        ?>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
<script src = "script.js"> </script>
</body>
</html>
