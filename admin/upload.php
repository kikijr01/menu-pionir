<?php include '../config/auth.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Upload Menu</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<footer style="margin-top: 40px; color: #777; font-size: 14px;">
  &copy; <?= date("Y") ?> Opuweb. All rights reserved.
</footer>

<body>

<!-- ✅ NOTIFIKASI -->
<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == 'uploaded') {
    echo "<div class='notif-success'>✅ Menu berhasil diupload!</div>";
  } elseif ($_GET['status'] == 'deleted') {
    echo "<div class='notif-success'>🗑️ Menu berhasil dihapus!</div>";
  }
}
?>

<!-- HAMBURGER -->
<div class="hamburger" id="hamburgerBtn" onclick="toggleMenu()">☰</div>

<!-- OVERLAY -->
<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<!-- SIDEBAR MENU -->
<div class="menu-panel" id="menuPanel">
  <div class="close-btn" onclick="toggleMenu()">✕</div>
  <a href="dashboard.php">Dashboard</a>
  <a href="upload.php">Upload Menu</a>
  <a href="logout.php">Logout</a>
</div>

<!-- KONTEN -->
<div class="content">
  <?php
    $menu = "../uploads/menu.jpg";
    $menuExists = file_exists($menu);
  ?>

  <h2>Upload Menu Baru</h2>
  <?php if (!$menuExists): ?>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="gambar" accept="image/*" required>
      <button type="submit">Upload</button>
    </form>
  <?php else: ?>
    <p style="color: #c0392b; font-weight: bold;">
      ⚠️ Anda harus menghapus gambar menu yang lama sebelum bisa mengunggah yang baru.
    </p>
  <?php endif; ?>

  <hr>
  <h3>Menu Saat Ini:</h3>
  <?php
  if ($menuExists) {
      echo "<img src='$menu' width='400'><br><br>";
      echo "<form action='hapus_menu.php' method='post' onsubmit=\"return confirm('Yakin ingin menghapus menu yang lama?');\">
              <button type='submit'>Hapus Menu Sebelumnya</button>
            </form>";
  } else {
      echo "<p>Belum ada gambar menu.</p>";
  }
  ?>
</div>

<!-- JS toggle -->
<script>
  function toggleMenu() {
    const menuPanel = document.getElementById("menuPanel");
    const overlay = document.getElementById("overlay");
    const hamburger = document.getElementById("hamburgerBtn");

    menuPanel.classList.toggle("active");
    overlay.classList.toggle("active");
    hamburger.classList.toggle("hidden"); // Sembunyikan/munculkan hamburger
  }
</script>

</body>
</html>
