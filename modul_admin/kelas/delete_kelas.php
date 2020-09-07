<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM kelas WHERE id_kelas='$id'");
header("location:media_admin.php?module=kelas");
