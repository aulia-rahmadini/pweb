<?php
include 'config.php';

$sql = "SELECT * FROM products_menu1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read Menu1</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="create.php">Add New Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
            <td>
                <a href="update.php?id=<?= $product['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $product['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
