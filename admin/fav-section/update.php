<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM picture WHERE id = :id";
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

        $sql = "UPDATE picture SET name = :name, image = :image WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'image' => $targetFile,
            'id' => $id
        ]);
    } else {
        $sql = "UPDATE picture SET name = :name WHERE id = :id";
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "League Spartan", sans-serif;
      }
    </style>
  </head>
  <body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
      <h1 class="text-2xl font-bold mb-6 text-center">Edit Product</h1>
      <form method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">Product Name:</label>
          <input 
            type="text" 
            id="name" 
            name="name" 
            value="<?= htmlspecialchars($product['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>" 
            required 
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <div>
          <label for="image" class="block text-gray-700 font-medium mb-2">Upload Image:</label>
          <input 
            type="file" 
            id="image" 
            name="image" 
            accept="image/*" 
            class="w-full text-gray-700"
          />
        </div>

        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
          Update
        </button>
      </form>
    </div>
  </body>
</html>
