<?php
include "koneksi.php"
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<link rel="stylesheet" href="css/cari.css">
<div class="main_content">
  <div class="info">

    <div class="card2">
      <div class="formulir">
        <h2 style="padding: 10px 0 0 10px">SISWA</h2>
        <form method="POST" action="media_admin.php?module=register_siswa" align="center" onsubmit="return validasi(this)">
          <!-- Action = tujuan ketika tombol di klik dan menuju ke register tarif -->
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">Nisn</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="nisn" placeholder="1234567801" required>
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Nis</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="nis" placeholder="11223344455" required></td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Nama</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="nama" placeholder="Pauziah" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">ID Kelas</td>
              <td>:</td>
              <td>
                <select class="kotak" name="idkelas" <option value="" selected>

                  </option>
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM kelas") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?php echo $dataForeign['id_kelas'] ?>> <?php echo $dataForeign['id_kelas'] ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Alamat</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="alamat" placeholder="Kp.Ciletuh Girang" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">No Tlp</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="tlp" placeholder="085887322352" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">ID Spp</td>
              <td>:</td>
              <td>
                <select class="kotak" name="idspp" <option value="" selected>

                  </option>
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM spp") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?php echo $dataForeign['id_spp'] ?>> <?php echo $dataForeign['id_spp'] ?> </option>
                  <?php } ?>
                </select>
              </td>
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
          <option value="nisn">Nisn</option>
          <option value="Nis">Nis</option>
          <option value="Nama">Nama</option>
        </select>
        <input class="search" type="text" name="inputcari" placeholder="Pencarian..." required>
        <input class="button-cari" name="btncari" type="submit" value="Cari" />
        <button onclick="window.location.href='modul_admin/siswa/laporan_siswa.php'" class="button-print">Print</button>

      </form>
    </div>


    <div class="table_wrap">
      <div class="table_header">
        <ul>
          <li>
            <div class="item">
              <div class="phone">
                <span>ID Spp</span>
              </div>
              <div class="phone">
                <span>ID Kelas</span>
              </div>
              <div class="issue">
                <span>Nisn</span>
              </div>
              <div class="phone">
                <span>Nis</span>
              </div>
              <div class="phone">
                <span>Nama</span>
              </div>
              <div class="phone">
                <span>Tlp</span>
              </div>
              <div class="issue">
                <span>Alamat</span>
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
          $sql = mysqli_query($connection, "select * from siswa 
          where $kategori LIKE '%$datacari%' 
          ORDER BY $kategori") or die(mysqli_connect_error());
        } else {
          $sql = mysqli_query($connection, "select * from siswa") or die(mysqli_connect_error());
        }
        // mysqli_fetch_array = memasukan semua data tadi ke variabel array
        while ($mydata = mysqli_fetch_array($sql)) {
        ?>
          <ul>
            <li>
              <div class="item">
                <div class="phone">
                  <span><?php echo $mydata['id_spp']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['id_kelas']; ?></span>
                </div>
                <div class="issue">
                  <span><?php echo $mydata['nisn']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nis']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nama']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['no_tlp']; ?></span>
                </div>
                <div class="issue">
                  <span><?php echo $mydata['alamat']; ?></span>
                </div>

                <div class="issue">
                  <a href="media_admin.php?module=update_siswa&amp;id=<?php echo $mydata['nisn']; ?>" style="color:blue; margin-right:15px;">Update</a>
                  <a href="media_admin.php?module=delete_siswa&amp;id=<?php echo $mydata['nisn']; ?>" style="color:Red;">Delete</a>
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
    if (form.nisn.value == "") {
      alert("id tarif masih kosong!");
      form.inputIdMenu.focus();
      return false;
    }
    if (form.status.value == "") {
      alert("Daya masih kosong!");
      form.status.focus();
      return false;
    }
    if (form.nis.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.nis.focus();
      return false;
    }
    if (form.idkelas.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.idkelas.focus();
      return false;
    }
    if (form.nama.value == "") {
      alert("Tarif Per KWH masih kosong!");
      form.nama.focus();
      return false;
    }
    return true;
  }
</script>