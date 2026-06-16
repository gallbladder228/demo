<?php
require 'config/db.php';

if(isset($_POST['register'])){

    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fio, phone, email, login, password)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $fio,
        $phone,
        $email,
        $login,
        $password
    ]);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Регистрация</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Регистрация</h1>

    <form method="POST">

        <input
            type="text"
            name="fio"
            placeholder="ФИО"
            required
        >

        <input
            type="tel"
            name="phone"
            placeholder="Телефон"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

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

        <button name="register">
            Зарегистрироваться
        </button>

    </form>

    <a href="login.php">
        Уже есть аккаунт?
    </a>

</div>

</body>
</html>