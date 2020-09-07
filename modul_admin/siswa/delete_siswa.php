<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM siswa WHERE nisn='$id'");
header("location:media_admin.php?module=siswa");
