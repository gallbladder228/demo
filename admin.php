<?php

session_start();

require 'config/db.php';


if(!isset($_SESSION['admin'])){

    header("Location: admin_login.php");
    exit;

}

$sql = "
SELECT 
requests.*,
users.fio,
users.phone,
users.email

FROM requests

JOIN users 
ON requests.user_id = users.id

ORDER BY requests.id DESC
";

$stmt = $pdo->query($sql);

$requests = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Админ-панель</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h1>Админ-панель</h1>

<table>
<tr>

<th>ID</th>
<th>ФИО</th>
<th>Телефон</th>
<th>Услуга</th>
<th>Адрес</th>
<th>Дата</th>
<th>Статус</th>
<th>Действия</th>

</tr>
<?php foreach($requests as $item): ?>
<tr>


<td>
<?= $item['id'] ?>
</td>


<td>
<?= $item['fio'] ?>
</td>


<td>
<?= $item['phone'] ?>
</td>


<td>
<?= $item['service'] ?>
</td>


<td>
<?= $item['address'] ?>
</td>


<td>
<?= $item['request_date'] ?>
</td>


<td>
<?= $item['status'] ?>
</td>


<td>
<a href="update_status.php?id=<?= $item['id'] ?>&status=Выполнена">
Выполнить
</a>


<br>
<a href="update_status.php?id=<?= $item['id'] ?>&status=Отменена">
Отменить
</a>

</td>
</tr>

<?php endforeach; ?>

</table>
</div>
</body>
</html>