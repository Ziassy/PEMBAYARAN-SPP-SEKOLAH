<?php
include "koneksi.php";
$id = $_GET['id'];
$queryEdit = mysqli_query($connection, "SELECT * FROM pembayaran where id_pembayaran='$id' limit 1") or die(mysqli_connect_error());
$dataEdit = mysqli_fetch_array($queryEdit);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<div class="main_content">
  <div class="info">

    <div class="card2">
      <div class="formulir">
        <h2>Update Pembayaran</h2>
        <form method="POST" action="media_admin.php?module=update_proses_pembayaran&amp;id=<?= $dataEdit['id_pembayaran']; ?>" align="center" onsubmit="return validasi(this)">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID Pembayaran</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="pembayaran" size="40%" value=<?= $dataEdit['id_pembayaran']; ?>>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Petugas</td>
              <td>:</td>
              <td><select class="kotak" name="idPetugas">
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM petugas") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?= $dataForeign['id_petugas'] ?>> <?= $dataForeign['username'] ?> </option>

                  <?php } ?>
                </select>
            </tr>
            <tr>
              <td class="inputan" width="20%">nisn</td>
              <td>:</td>
              <td>
                <select class="kotak" name="nisn">
                  <?php
                  $sqlForeign = mysqli_query($connection, "SELECT * FROM siswa") or die(mysqli_connect_error());
                  while ($dataForeign = mysqli_fetch_array($sqlForeign)) {
                  ?>
                    <option value=<?= $dataForeign['nisn'] ?>> <?= $dataForeign['nisn'] ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Tanggal</td>
              <td>:</td>
              <td><input class="kotak" type="date" name="tgl_bayar" size="40%" value=<?= $dataEdit['tgl_bayar']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Bulan</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="bln_dibayar" size="40%" value=<?= $dataEdit['bulan_dibayar']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Tahun</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="thn_dibayar" size="40%" value=<?= $dataEdit['tahun_dibayar']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Jumlah</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="jml_dibayar" size="40%" value=<?= $dataEdit['jumlah_bayar']; ?>></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input class="submit" type="submit" name="tambahUser" value="Update User">
                <input class="reset" type="reset" name="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>
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