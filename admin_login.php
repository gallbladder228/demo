<?php

session_start();

if(isset($_POST['login_btn'])){

    $login = $_POST['login'];
    $password = $_POST['password'];


    if($login == "adminka" && $password == "password"){

        $_SESSION['admin'] = true;

        header("Location: admin.php");
        exit;
    }

    $error = "Неверные данные";
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Администратор</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
<h1>Вход администратора</h1>

<?php if(isset($error)): ?>

<p><?= $error ?></p>

<?php endif; ?>

<form method="POST">

<input 
type="text"
name="login"
placeholder="Логин"
required>


<input
type="password"
name="password"
placeholder="Пароль"
required>


<button name="login_btn">
Войти
</button>
</form>
</div>
</body>
</html>