<?php
$menu = "uploads/menu.jpg";
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="id">
<head> 
  <meta charset="UTF-8">
  <title>Menu Cafe</title>
  <link rel="stylesheet" href="assets/index.css">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
</head>
<body>

  <img src="assets/img/opuweb.png" alt="Opuweb Logo" class="logo-opuweb">
  <h2>Daftar Menu</h2>  

  <?php if (file_exists($menu)): ?>
    <img src="<?= $menu ?>?t=<?= time() ?>" alt="Menu" class="menu-preview">
  <?php else: ?>
    <p>Menu belum tersedia.</p>
  <?php endif; ?>

  <footer style="margin-top: 40px; color: #777; font-size: 14px;">
    &copy; <?= date("Y") ?> Opuweb. All rights reserved.
  </footer>

</body>
</html>
