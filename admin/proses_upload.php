<?php
$targetDir = "../uploads/";
$targetFile = $targetDir . "menu.jpg";

// Tipe file yang diperbolehkan
$allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];

if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
    $fileType = mime_content_type($_FILES["gambar"]["tmp_name"]);

    if (!in_array($fileType, $allowedTypes)) {
        echo "Format file tidak didukung. Hanya JPG, PNG, atau WebP yang diperbolehkan.";
        exit();
    }

    // Hapus gambar lama kalau ada
    if (file_exists($targetFile)) {
        unlink($targetFile);
    }

    // Simpan gambar baru
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
        header("Location: upload.php?status=uploaded");
        exit();
    } else {
        echo "Gagal mengunggah file.";
    }
} else {
    echo "Tidak ada file yang dipilih atau terjadi kesalahan.";
}
?>
