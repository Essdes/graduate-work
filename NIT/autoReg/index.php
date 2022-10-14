<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
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

<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <ul>
            <li>
                <span> Перейти в <a href="../Main_1.php"> Главное меню</a></span>
            </li>
        </ul>
        <label>Логин<a href="">*</a></label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль<a href="">*</a></label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
<script src = "script.js"> </script>
</body>
</html>
