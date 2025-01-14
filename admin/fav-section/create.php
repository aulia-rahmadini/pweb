<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_FILES['image'];

    if ($image['error'] == 0) {
        $targetDir = "../uploads/";
        $targetFile = $targetDir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $targetFile);

        $sql = "INSERT INTO picture (name, image) VALUES (:name, :image)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'image' => $targetFile
        ]);

        header("Location: read.php");
    } else {
        echo "Error uploading image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Menu1</title>
</head>
<body>
    <h1 >Add New Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Product Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Upload Image:</label><br>
        <input type="file" name="image" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
