<?php
session_start();
$USERNAME = "ganteng";
$PASSWORD = "1234"; // ganti kalau perlu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == $USERNAME && $_POST['password'] == $PASSWORD) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Login gagal. Coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel="stylesheet" href="../assets/login.css">
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>

<body class="login-page">

<div class="login-wrapper">
  <div class="login-card">
    <img src="../assets/img/opuweb.png" alt="Opuweb Logo" class="login-logo">
    <h2>Login !!!</h2>
    <form method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>
    <?php if (!empty($error)) echo "<p class='error-msg'>$error</p>"; ?>
  </div>

  <!-- Footer dimasukkan ke dalam login-wrapper -->
  <footer class="footer-login">
    &copy; <?= date("Y") ?> Opuweb. All rights reserved.
  </footer>
</div>

</body>
</html>
