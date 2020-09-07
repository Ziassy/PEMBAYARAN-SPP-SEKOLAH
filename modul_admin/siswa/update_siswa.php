<?php
include "koneksi.php";
$id = $_GET['id'];
$queryEdit = mysqli_query($connection, "SELECT * FROM siswa where nisn='$id' limit 1") or die(mysqli_connect_error());
$dataEdit = mysqli_fetch_array($queryEdit);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<div class="main_content">
  <div class="info">

    <div class="card2">
      <div class="formulir">
        <h2>UPDATE SISWA</h2>
        <form method="POST" action="media_admin.php?module=update_proses_siswa&amp;id=<?php echo $dataEdit['nisn']; ?>" align="center" onsubmit="return validasi(this)">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">Nisn</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="nisn" size="40%" value=<?php echo $dataEdit['nisn']; ?>>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Nis</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="nis" size="40%" value=<?php echo $dataEdit['nis']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Nama</td>
              <td>:</td>
              <td><input class="kotak" type="nama" name="nama" size="40%" value=<?php echo $dataEdit['nama']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Id Kelas</td>
              <td>:</td>
              <td>
                <select class="kotak" name="idspp" <option value="" selected>

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
              <td class="inputan" width="20%">alamat</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="alamat" size="40%" value=<?php echo $dataEdit['alamat']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">NO TLP</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="tlp" size="40%" value=<?php echo $dataEdit['no_tlp']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">ID spp</td>
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