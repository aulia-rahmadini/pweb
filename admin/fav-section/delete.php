<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM products_menu1 WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);

header("Location: read.php");
?>
