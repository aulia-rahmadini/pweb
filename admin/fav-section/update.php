<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products_menu1 WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_FILES['image'];

    if ($image['error'] == 0) {
        $targetDir = "../uploads/";
        $targetFile = $targetDir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $targetFile);

        $sql = "UPDATE products_menu1 SET name = :name, image = :image WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'image' => $targetFile,
            'id' => $id
        ]);
    } else {
        $sql = "UPDATE products_menu1 SET name = :name WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'id' => $id
        ]);
    }

    header("Location: read.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Menu1</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Product Name:</label><br>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br><br>
        <label>Upload Image:</label><br>
        <input type="file" name="image"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
