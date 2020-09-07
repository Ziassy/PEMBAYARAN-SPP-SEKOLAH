<?php
include "koneksi.php"
?>
<link rel="stylesheet" type="text/css" href="css/main_content.css">
<link rel="stylesheet" href="css/cari.css">
<div class="main_content">
  <div class="info">

    <div class="card">
      <div class="formulir">
        <h2 style="padding: 10px 0 0 10px">SPP</h2>
        <form method="POST" action="media_admin.php?module=register_spp" align="center" onsubmit="return validasi(this)">
          <!-- Action = tujuan ketika tombol di klik dan menuju ke register tarif -->
          <table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="inputan" width="20%">ID SPP</td>
              <td>:</td>
              <td>
                <input class="kotak" type="text" name="idspp" placeholder="1">
              </td>
            </tr>

            <tr>
              <td class="inputan" width="20%">Tahun</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="tahun" placeholder="2020"></td>
            </tr>

            <tr>
              <td class="inputan" width="20%">nominal</td>
              <td>:</td>
              <td><input class="kotak" type="number" name="nominal" placeholder="20000"></td>
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
          <option value="idspp">ID spp</option>
          <option value="tahun">tahun</option>
          <option value="nominal">Nominal</option>
        </select>
        <input class="search" type="text" name="inputcari" placeholder="Pencarian..." required>
        <input class="button-cari" name="btncari" type="submit" value="Cari" />
        <button onclick="window.location.href='modul_admin/spp/laporan_spp.php'" class="button-print">Print</button>

      </form>
    </div>

    <div class="table_wrap">
      <div class="table_header">
        <ul>
          <li>
            <div class="item">
              <div class="name">
                <span>ID spp</span>
              </div>
              <div class="phone">
                <span>Tahun</span>
              </div>
              <div class="phone">
                <span>Nominal</span>
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
          $sql = mysqli_query($connection, "select * from spp 
          where $kategori LIKE '%$datacari%' 
          ORDER BY $kategori") or die(mysqli_connect_error());
        } else {
          $sql = mysqli_query($connection, "select * from spp") or die(mysqli_connect_error());
        }
        // mysqli_fetch_array = memasukan semua data tadi ke variabel array
        while ($mydata = mysqli_fetch_array($sql)) {
        ?>
          <ul>
            <li>
              <div class="item">
                <div class="name">
                  <span><?php echo $mydata['id_spp']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['tahun']; ?></span>
                </div>
                <div class="phone">
                  <span><?php echo $mydata['nominal']; ?></span>
                </div>
                <div class="issue">
                  <a href="media_admin.php?module=update_spp&amp;id=<?php echo $mydata['id_spp']; ?>" style="color:blue; margin-right:15px;">Update
                  </a>
                  <a href="media_admin.php?module=delete_spp&amp;id=<?php echo $mydata['id_spp']; ?>" style="color:Red;">Delete</a>
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