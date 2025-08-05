<?php
$menu = '../uploads/menu.jpg';
if (file_exists($menu)) {
    unlink($menu); // hapus file
}
header("Location: upload.php?status=deleted"); // balik ke upload.php + info status
exit();
?>
