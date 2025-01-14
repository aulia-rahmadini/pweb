<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM picture WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);

header("Location: read.php");
?>
