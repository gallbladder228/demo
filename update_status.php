<?php

session_start();

require 'config/db.php';


if(!isset($_SESSION['admin'])){

header("Location: admin_login.php");
exit;

}

$id = $_GET['id'];

$status = $_GET['status'];


$stmt = $pdo->prepare(
"UPDATE requests
 SET status=?
 WHERE id=?"
);


$stmt->execute([
$status,
$id
]);


header("Location: admin.php");
