<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "spp";
$connection = mysqli_connect($server, $username, $password, $database) or die("Gagal connect ke server MySQL" . mysqli_connect_error());
