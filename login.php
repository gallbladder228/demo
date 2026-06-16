<?php
session_start();
require 'config/db.php';

if(isset($_POST['login_btn'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare(
        "SELECT * FROM users WHERE login=?"
    );

    $stmt->execute([$login]);

    $user = $stmt->fetch();

    if($user && password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fio'] = $user['fio'];

        header("Location: profile.php");
        exit;
    }

    $error = "Неверный логин или пароль";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Авторизация</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="container">

    <h1>Авторизация</h1>

    <?php if(isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>

    <form method="POST">

        <input
            type="text"
            name="login"
            placeholder="Логин"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Пароль"
            required
        >

        <button name="login_btn">
            Войти
        </button>

    </form>

    <a href="register.php">
        Зарегистрироваться
    </a>

</div>

</body>
</html>
