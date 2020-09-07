<?php
include "koneksi.php"
?>
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<link rel="stylesheet" href="css/dashboard.css">
<div class="main_content">


    <div class="info">
        <div class="card-dasboard">
            <div class="formulir">
                <?php
                if ($modul == 'home') {
                    echo "<h2>Selamat Datang </h2>";
                    echo "<br>";
                    echo "Hai, <b>" . $_SESSION['username'] . "</b> di sini anda masuk sebagai <b>" . $_SESSION['level'] . " </b> <b>Di Sistem Informasi Pembayaran SPP Online SMK INFORMATIKA CBI</b><br>";
                }
                ?>
                <div class="container">
                    <div class="card-dalam">
                        <img src="img/logoo.jpg" alt="" width="100%">
                        <div class="judul">
                            <p>SMK INFROMATIKA<br>CBI</p>
                        </div>

                    </div>

                    <p class="introduce">
                        Ini adalah halaman yang digunakan untuk mengelola Pembayaran Sekolah SMK INFORMATIKA CBI, Melihat
                        halaman ini berarti anda terdaftar sebagai Administrator yang di percaya untuk mengelola Pembayaran SPP.
                        <br>
                        <b>Untuk petunjuk penggunaan silahkan ikuti langkah di bawah ini : <br>

                            <button onclick="window.location.href='#'" class="petunjuk">Petunjuk Penggunaan</button>
                            </Untuk>


                </div>


            </div>

        </div>

    </div>
</div>