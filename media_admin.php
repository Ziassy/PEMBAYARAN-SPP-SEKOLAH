<?php
session_start();
include "koneksi.php";
include "akses.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Media Admin</title>
</head>

<body>
  <div class="style">

    <div class="menu">
      <?php include "menu_admin.php"; ?>
    </div>

    <div id="isi">
      <?php include "content_admin.php"; ?>
    </div>

    <div id="clearer">
    </div>

  </div>
</body>

</html>