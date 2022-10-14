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

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <span> Перейти в <a href="../Main_1.php"> Главное меню</a></span>
            </li>
        </ul>
        <label>ФИО<a href="">*</a></label>
        <input type="text" name="full_name" required placeholder="Введите свое полное имя">
        <label>Логин<a href="">*</a></label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        <label>Почта<a href="">*</a></label>
        <input type="email" name="email" required placeholder="Введите адрес своей почты">
        <label>Изображение профиля<a href="">*</a></label>
        <input type="file" name="avatar" required>
        <label>Пароль<a href="">*</a></label>
        <input type="password" name="password" required placeholder="Введите пароль">
        <label>Подтверждение пароля<a href="">*</a></label>
        <input type="password" name="password_confirm" required placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
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
