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
        <h2>KELAS</h2>
        <form method="POST" action="media_admin.php?module=register_kelas" align="center" onsubmit="return validasi(this)">
          <!-- Action = tujuan ketika tombol di klik dan menuju ke register tarif -->
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID kelas</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idkelas" placeholder="1" required>
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Nama Kelas</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="namakelas" placeholder="RPL 2" required></td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Kompetensi Keahlian</td>
              <td>:</td>
              <td>
                <select class="kotak" name="keahlian" value="Jurusan">
                  <option value="RPL">Rekayasa Perangkat Lunak</option>
                  <option value="MM">Multimedia</option>
                </select>
                <!-- <input class="kotak" type="text" name="keahlian" placeholder="RPL"></td> -->
            </tr>
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
          <option value="idkelas">ID kelas</option>
          <option value="namaKelas">Nama Kelas</option>
          <option value="keahlian">Kompetensi Keahlian</option>
        </select>
        <input class="search" type="text" name="inputcari" placeholder="Pencarian..." required>
        <input class="button-cari" name="btncari" type="submit" value="Cari" />
        <button onclick="window.location.href='modul_admin/kelas/laporan_kelas.php'" class="button-print">Print</button>

      </form>
    </div>


    <div class="table_wrap">
      <div class="table_header">
        <ul>
          <li>
            <div class="item">
              <div class="name">
                <span>ID kelas</span>
              </div>
              <div class="phone">
                <span>Nama Kelas</span>
              </div>
              <div class="phone">
                <span>Kompetensi keahlian</span>
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
          $sql = mysqli_query($connection, "select * from kelas 
          where $kategori LIKE '%$datacari%' 
          ORDER BY $kategori") or die(mysqli_connect_error());
        } else {
          $sql = mysqli_query($connection, "select * from kelas") or die(mysqli_connect_error());
        }
        // mysqli_fetch_array = memasukan semua data tadi ke variabel array
        while ($mydata = mysqli_fetch_array($sql)) {
        ?>
          <ul>
            <li>
              <div class="item">
                <div class="name">
                  <span><?php echo $mydata['id_kelas']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nama_kelas']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['kompetensi_keahlian']; ?></span>
                </div>
                <div class="issue">
                  <a href="media_admin.php?module=update_kelas&amp;id=<?php echo $mydata['id_kelas']; ?>" style="color:blue; margin-right:15px;">Update</a>
                  <a href="media_admin.php?module=delete_kelas&amp;id=<?php echo $mydata['id_kelas']; ?>" style="color:Red;">Delete</a>
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
    if (form.idkelas.value == "") {
      alert("ID Kelas masih kosong!");
      form.idkelas.focus();
      return false;
    }
    if (form.namakelas.value == "") {
      alert("Nama Kelas masih kosong!");
      form.namakelas.focus();
      return false;
    }
    if (form.keahlian.value == "") {
      alert("Keahlian masih kosong!");
      form.keahlian.focus();
      return false;
    }
    return true;
  }
</script>