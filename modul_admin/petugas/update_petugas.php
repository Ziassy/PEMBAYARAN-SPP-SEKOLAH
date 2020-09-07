<?php
include "koneksi.php";
$id = $_GET['id'];
$queryEdit = mysqli_query($connection, "SELECT * FROM petugas where id_petugas='$id' limit 1") or die(mysqli_connect_error());
$dataEdit = mysqli_fetch_array($queryEdit);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<div class="main_content">
  <div class="info">

    <div class="card">
      <div class="formulir">
        <h2>UPDATE PETUGAS</h2>
        <form method="POST" action="media_admin.php?module=update_proses_petugas&amp;id=<?php echo $dataEdit['id_petugas']; ?>" align="center" onsubmit="return validasi(this)">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID Petugas</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idPetugas" size="40%" value=<?php echo $dataEdit['id_petugas']; ?>>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">Username</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="username" size="40%" value=<?php echo $dataEdit['username']; ?>></td>
            </tr>
            <!-- <tr>
              <td class="inputan" width="20%">Password</td>
              <td>:</td>
              <td><input class="kotak" type="password" name="password" size="40%" value=<?php echo $dataEdit['password']; ?> disabled></td>
            </tr> -->
            <tr>
              <td class="inputan" width="20%">Nama Lengkap</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="nama_lengkap" size="40%" value=<?php echo $dataEdit['nama_petugas']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">level</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="level" size="40%" value=<?php echo $dataEdit['level']; ?>></td>
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