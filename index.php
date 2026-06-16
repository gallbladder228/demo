<?php

require 'db.php';


$currentUser = isset($_SESSION['user']) 
? $_SESSION['user'] 
: null;

?>


<!DOCTYPE html>

<html lang="ru">


<head>

<meta charset="UTF-8">

<title>Мой Не Сам — Клининг</title>

<link rel="stylesheet" href="style.css">

</head>



<body>


<div class="main-container">


    <div id="page-login" class="page">

        <h2>Вход в систему</h2>


        <form id="login-form">


            <div class="form-group">

                <label>Логин</label>

                <input type="text" name="login" required>

            </div>



            <div class="form-group">

                <label>Пароль</label>

                <input 
                type="password" 
                name="password" 
                required>

            </div>


            <button type="submit">

                Войти

            </button>


        </form>



        <div class="nav-link">

            Регистрация

        </div>


    </div>





    <div id="page-register" class="page">


        <h2>Registration</h2>



        <form id="register-form">


            <input 
            type="text"
            name="fio"
            placeholder="ФИО"
            required>



            <input 
            type="text"
            name="phone"
            placeholder="Телефон"
            required>



            <input 
            type="email"
            name="email"
            placeholder="Email"
            required>



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



            <button type="submit">

                Зарегистрироваться

            </button>



        </form>


    </div>





    <div id="page-client" class="page">


        <h2>

            Добро пожаловать

        </h2>



        <button>

            + Создать заявку

        </button>



        <h3>

            История ваших заказов

        </h3>



        <table>


        <tr>

        <th>Услуга</th>

        <th>Дата/Время</th>

        <th>Статус</th>


        </tr>


        </table>


    </div>






    <div id="page-admin" class="page">


        <h2>

        Панель администратора

        </h2>



        <table>


        <tr>

        <th>Клиент</th>

        <th>Детали заказа</th>

        <th>Действие</th>


        </tr>



        </table>


    </div>



</div>





<script>

let IS_ADMIN = false;

let IS_USER = false;


</script>


<script src="script.js">

</script>



</body>

</html>
