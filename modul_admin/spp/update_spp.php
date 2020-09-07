<?php
include "koneksi.php";
$id = $_GET['id'];
$queryEdit = mysqli_query($connection, "SELECT * FROM spp where id_spp='$id' limit 1") or die(mysqli_connect_error());
$dataEdit = mysqli_fetch_array($queryEdit);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<link rel="stylesheet" href="css/cari.css">
<div class="main_content">
  <div class="info">

    <div class="card">
      <div class="formulir">
        <h2>SPP</h2>
        <form method="POST" action="media_admin.php?module=update_proses_spp&amp;id=<?php echo $dataEdit['id_spp']; ?>" align="center" onsubmit="return validasi(this)">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID spp</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idspp" size="40%" value=<?php echo $dataEdit['id_spp']; ?>>
              </td>
            </tr>
            <tr>
              <td class="inputan" width="20%">tahun</td>
              <td>:</td>
              <td><input class="kotak" type="text" name="tahun" size="40%" value=<?php echo $dataEdit['tahun']; ?>></td>
            </tr>
            <tr>
              <td class="inputan" width="20%">nominal</td>
              <td>:</td>
              <td><input class="kotak" type="nominal" name="nominal" size="40%" value=<?php echo $dataEdit['nominal']; ?>></td>
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
        if (form.idspp.value == "") {
          alert("ID SPP masih kosong!");
          form.idspp.focus();
          return false;
        }
        if (form.tahun.value == "") {
          alert("Tahun masih kosong!");
          form.tahun.focus();
          return false;
        }
        if (form.nominal.value == "") {
          alert("Nominal masih kosong!");
          form.nominal.focus();
          return false;
        }
        return true;
      }
    </script>