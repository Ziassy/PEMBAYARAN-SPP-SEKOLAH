<?php
include "koneksi.php";
$id = $_GET['id'];
$queryEdit = mysqli_query($connection, "SELECT * FROM kelas where id_kelas='$id' limit 1") or die(mysqli_connect_error());
$dataEdit = mysqli_fetch_array($queryEdit);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<div class="main_content">
  <div class="info">

    <div class="card">
      <div class="formulir">
        <h2>UPDATE KELAS</h2>
        <form method="POST" action="media_admin.php?module=update_proses_kelas&amp;id=<?= $dataEdit['id_kelas']; ?>" align="center" onsubmit="return validasi(this)">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID kelas</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idkelas" size="40%" value=<?= $dataEdit['id_kelas']; ?> required>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Nama kelas</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="namakelas" size="40%" value=<?= $dataEdit['nama_kelas']; ?> required>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Kompetensi Keahlian</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="keahlian" size="40%" value=<?= $dataEdit['kompetensi_keahlian']; ?>></td>
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