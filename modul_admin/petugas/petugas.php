<?php
include "koneksi.php"
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<link rel="stylesheet" href="css/cari.css">
<div class="main_content">
  <div class="info">

    <div class="card">
      <div class="formulir">
        <h2>PETUGAS</h2>
        <form method="POST" action="media_admin.php?module=register_petugas" align="center" onsubmit="return validasi(this)">
          <!-- Action = tujuan ketika tombol di klik dan menuju ke register tarif -->
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID petugas</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idPetugas" placeholder="1">
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Username</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="username" placeholder="ziah"></td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Password</td>
              <td>:</td>
              <td><input class="kotak" type="password" name="password"></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Nama Lengkap</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="nama_lengkap" placeholder="Pauziah"></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Status</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="level" placeholder="admin"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input class="submit" type="submit" name="tambahUser" value="Tambah">
                <input class="reset" type="reset" name="reset" value="Reset"></td> <!-- value = input yang tampil -->
            </tr>
          </table>
        </form>
      </div>
    </div>

    <div class="cari">

      <!-- //PENCARIAN -->
      <form method="POST" action="" onsubmit="return validasi(this)">
        <select class="kategori" name="inputkategori" value="Kategori">
          <option value="idPetugas">ID Petugas</option>
          <option value="username">Username</option>
          <option value="nama">Nama</option>
        </select>
        <input class="search" type="text" name="inputcari" placeholder="Pencarian..." required>
        <input class="button-cari" name="btncari" type="submit" value="Cari" />
        <button onclick="window.location.href='modul_admin/petugas/laporan_petugas.php'" class="button-print">Print</button>

      </form>
    </div>



    <div class="table_wrap">
      <div class="table_header">
        <ul>
          <li>
            <div class="item">
              <div class="name">
                <span>ID Petugas</span>
              </div>
              <div class="phone">
                <span>Username</span>
              </div>
              <div class="phone">
                <span>Nama Petugas</span>
              </div>
              <div class="phone">
                <span>LEVEL</span>
              </div>
              <div class="issue">
                <span>Opsi</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="table_body">
        <?php
        if (isset($_POST['btncari'])) {
          $kategori = $_POST['inputkategori'];
          $datacari = $_POST['inputcari'];
          // select * =  menampilkan data dari table
          // mysqli_query = menjalankan perintah query
          $sql = mysqli_query($connection, "select * from petugas 
          where $kategori LIKE '%$datacari%' 
          ORDER BY $kategori") or die(mysqli_connect_error());
        } else {
          $sql = mysqli_query($connection, "select * from petugas") or die(mysqli_connect_error());
        }
        // mysqli_fetch_array = memasukan semua data tadi ke variabel array
        while ($mydata = mysqli_fetch_array($sql)) {
        ?>
          <ul>
            <li>
              <div class="item">
                <div class="name">
                  <span><?php echo $mydata['id_petugas']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['username']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nama_petugas']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['level']; ?></span>
                </div>
                <div class="issue">
                  <a href="media_admin.php?module=update_petugas&amp;id=<?php echo $mydata['id_petugas']; ?>" style="color:blue; margin-right:15px;">Update</a>
                  <a href="media_admin.php?module=delete_petugas&amp;id=<?php echo $mydata['id_petugas']; ?>" style="color:Red;">Delete</a>
                </div>

              </div>
            </li>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function validasi(form) {
    if (form.idPetugas.value == "") {
      alert("id tarif masih kosong!");
      form.inputIdMenu.focus();
      return false;
    }
    if (form.status.value == "") {
      alert("Daya masih kosong!");
      form.status.focus();
      return false;
    }
    if (form.username.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.username.focus();
      return false;
    }
    if (form.nama_lengkap.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.nama_lengkap.focus();
      return false;
    }
    if (form.password.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.password.focus();
      return false;
    }
    return true;
  }
</script>