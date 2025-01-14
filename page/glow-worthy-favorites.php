<?php
include 'connection.php'; // Include koneksi database

// Query untuk mendapatkan data gambar
$sql = "SELECT name, image FROM picture";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="grid grid-cols-5 gap-4">'; // Membuat container grid dengan 5 kolom

    while ($row = $result->fetch_assoc()) {
        // Perbaiki path dengan menghilangkan segmen ../ yang berlebihan
        $imagePath = '../admin/' . htmlspecialchars($row['image']);
        $normalizedPath = str_replace('../admin/../', '../admin/', $imagePath); // Normalisasi path

        echo '<div class="rounded-xl transform transition-all hover:-translate-y-2 duration-300 hover:shadow-2xl overflow-hidden">
                <a href="">
                    <img
                        src="' . $normalizedPath . '"
                        alt="' . htmlspecialchars($row['name']) . '"
                        class="w-full h-auto"
                    />
                </a>
              </div>';
    }

    echo '</div>'; // Menutup container grid
} else {
    echo "<p>No images available</p>";
}

$conn->close(); // Tutup koneksi
?>