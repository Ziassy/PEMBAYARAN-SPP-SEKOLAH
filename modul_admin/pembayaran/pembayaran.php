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
        <h2>Pembayaran</h2>
        <form method="POST" action="media_admin.php?module=register_pembayaran" align="center" onsubmit="return validasi(this)">
          <!-- Action = tujuan ketika tombol di klik dan menuju ke register tarif -->
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID Pembayaran</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="pembayaran" placeholder="12345" required>
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Petugas</td>
              <td>:</td>
              <td>
                <select class="kotak" name="idPetugas">
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM petugas") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?php echo $dataForeign['id_petugas'] ?>> <?php echo $dataForeign['username'] ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Nisn</td>
              <td>:</td>
              <td>
                <select class="kotak" name="nisn">
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM siswa") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?php echo $dataForeign['nisn'] ?>> <?php echo $dataForeign['nisn'] ?> </option>
                  <?php } ?>
                </select>
              </td>

            </tr>
            <tr>
              <td class="inputan" width="20%">Tanggal Bayar</td>
              <td>:</td>
              <td><input class="kotak" type="date" name="tgl_bayar" placeholder="1" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Bulan dibayar</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="bln_dibayar" placeholder="02" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Tahun dibayar</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="thn_dibayar" placeholder="2001" required></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Jumlah Bayar</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="jml_dibayar" placeholder="80000" required></td>

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
          <option value="pembayaran">ID pembayaran</option>
          <option value="idPetugas">ID Petugas</option>
          <option value="idkelas">ID Kelas</option>
          <option value="nisn">Nisn</option>
          <option value="tanggal">Tanggal</option>
          <option value="bulan">Bulan</option>
          <option value="tahun">Tahun</option>
        </select>
        <input class="search" type="text" name="inputcari" placeholder="Pencarian..." required>
        <input class="button-cari" name="btncari" type="submit" value="Cari" />
        <button onclick="window.location.href='modul_admin/pembayaran/laporan_pembayaran.php'" class="button-print">Print</button>

      </form>
    </div>



    <div class="table_wrap">
      <div class="table_header">
        <ul>
          <li>
            <div class="item">
              <div class="name">
                <span>ID Bayar</span>
              </div>
              <div class="phone">
                <span>ID petugas</span>
              </div>
              <div class="phone">
                <span>NISN</span>
              </div>
              <div class="phone">
                <span>Tanggal</span>
              </div>
              <div class="phone">
                <span>Bulan</span>
              </div>
              <div class="phone">
                <span>Tahun</span>
              </div>
              <div class="phone">
                <span>Jumlah</span>
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
          $sql = mysqli_query($connection, "select * from pembayaran 
          where $kategori LIKE '%$datacari%' 
          ORDER BY $kategori") or die(mysqli_connect_error());
        } else {
          $sql = mysqli_query($connection, "select * from pembayaran") or die(mysqli_connect_error());
        }
        // mysqli_fetch_array = memasukan semua data tadi ke variabel array
        while ($mydata = mysqli_fetch_array($sql)) {
        ?>
          <ul>
            <li>
              <div class="item">
                <div class="name">
                  <span><?php echo $mydata['id_pembayaran']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['id_petugas']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nisn']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['tgl_bayar']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['bulan_dibayar']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['tahun_dibayar']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['jumlah_bayar']; ?></span>
                </div>
                <div class="issue">
                  <a href="media_admin.php?module=update_pembayaran&amp;id=<?php echo $mydata['id_pembayaran']; ?>" style="color:blue; margin-right:15px;">Update</a>
                  <a href="media_admin.php?module=delete_pembayaran&amp;id=<?php echo $mydata['id_pembayaran']; ?>" style="color:Red;">Delete</a>
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
    if (form.pembayaran.value == "") {
      alert("pembayaran masih kosong!");
      form.pembayaran.focus();
      return false;
    }
    if (form.idPetugas.value == "") {
      alert("ID petugas masih kosong!");
      form.idPetugas.focus();
      return false;
    }
    if (form.nisn.value == "") {
      alert("Nisn masih kosong!");
      form.nisn.focus();
      return false;
    }
    if (form.tgl_bayar.value == "") {
      alert("Tanggal masih kosong!");
      form.tgl_bayar.focus();
      return false;
    }
    if (form.bln_dibayar.value == "") {
      alert("Bulan masih kosong!");
      form.bln_dibayar.focus();
      return false;
    }
    if (form.thn_dibayar.value == "") {
      alert("Tahun masih kosong!");
      form.thn_dibayar.focus();
      return false;
    }
    if (form.jml_dibayar.value == "") {
      alert("Jumlah masih kosong!");
      form.jml_dibayar.focus();
      return false;
    }

    return true;
  }
</script>