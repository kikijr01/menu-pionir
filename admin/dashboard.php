<?php include '../config/auth.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<footer style="margin-top: 40px; color: #777; font-size: 14px;">
  &copy; <?= date("Y") ?> Opuweb. All rights reserved.
</footer>

<body>



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
    <h2>Dashboard Admin</h2>
    <h3>Preview Menu Saat Ini:</h3>
    <?php
    $menu = "../uploads/menu.jpg";
    if (file_exists($menu)) {
        echo "<img src='$menu' class='menu-preview'>";
    } else {
        echo "<p>Belum ada gambar menu.</p>";
    }
    ?>
  </div>

  <!-- SCRIPT: Toggle Menu -->
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
