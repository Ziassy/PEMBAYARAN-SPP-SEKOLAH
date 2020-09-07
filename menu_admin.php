<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  #navigation a.active {
    color: #fff;
    font-weight: bold;
  }
</style>

<div class="wrapper">
  <div class="sidebar">
    <img src="img/logo1.png" alt="profile_pic" style="width: 100px; height:80px; margin-bottom:0 ; margin-left:25%;">
    <p style="color: white;"><i>
        <?php
        include "koneksi.php";
        $modul = $_GET['module'];
        if ($modul == 'home') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'petugas') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'pembayaran') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'siswa') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'kelas') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'spp') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'update_spp') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'update_petugas') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'update_siswa') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'update_kelas') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        } else if ($modul == 'update_pembayaran') {
          echo $_SESSION['level'] . " , " . $_SESSION['username'];
        }
        ?>
      </i>
    </p>
    <nav id="navigation">
      <ul>
        <li><a href="?module=home">Dashboard</a></li>
        <li><a href="?module=pembayaran">Pembayaran</a></li>
        <li><a href="?module=spp">SPP</a></li>
        <li><a href="?module=siswa">Siswa</a></li>
        <li><a href="?module=kelas">Kelas</a></li>
        <li><a href="?module=petugas">Petugas</a></li>
        <li><a href="logout.php"></i>Logout</a></li>
      </ul>
    </nav>

  </div>

  <div class="main_content">
    <div class="header">
      <h1>PEMBAYARAN SPP ONLINE</h1>
    </div>
  </div>

</div>

<script>
  function currentNav(navId) {
    var current = window.location.href.split('#')[0],
      nav = document.getElementById(navId),
      navItem = nav.getElementsByTagName('a');
    for (var i = 0; i < navItem.length; i++) {
      if (navItem[i].href == current || navItem[i].href == decodeURIComponent(current)) {
        navItem[i].className = "active";
      }
    }
  }
  currentNav('navigation');
</script>