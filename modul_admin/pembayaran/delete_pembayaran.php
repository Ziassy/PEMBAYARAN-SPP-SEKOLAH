<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM pembayaran WHERE id_pembayaran='$id'");
header("location:media_admin.php?module=pembayaran");
