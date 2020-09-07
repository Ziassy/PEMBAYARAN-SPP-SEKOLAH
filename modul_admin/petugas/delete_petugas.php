<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM petugas WHERE id_petugas='$id'");
header("location:media_admin.php?module=petugas");
