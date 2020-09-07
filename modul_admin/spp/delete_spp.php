<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM spp WHERE id_spp='$id'");
header("location:media_admin.php?module=spp");
