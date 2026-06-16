<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Личный кабинет</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>
        Добро пожаловать,
        <?= $_SESSION['fio'] ?>
    </h1>

    <p>
        Выберите действие:
    </p>

    <a href="create.php">
        Создать заявку
    </a>

    <br><br>

    <a href="my_requests.php">
        Мои заявки
    </a>

    <br><br>

    <a href="logout.php">
        Выйти
    </a>

</div>

</body>
</html>