<?php
include "../../koneksi.php";
$hasil2 = mysqli_query($connection, "select * from spp order by id_spp");
$pageQry = mysqli_query($connection, "SELECT * FROM surat_keluar");
?>

<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  th {
    background-color: blue;
    color: white;
  }

  .tanda-tangan {
    float: right;
    text-align: center;
    margin-top: 20px;
  }
</style>
<center>
  <h2>Laporan SPP</h2>
</center>
<table>
  <tr>
    <th>ID SPP</th>
    <th>TAHUN</th>
    <th>NOMINAL</th>

  </tr>

  <script>
    window.print();
  </script>
  <?php
  # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  if (isset($_POST['btnCari'])) {
    $sql = "SELECT * FROM spp WHERE id_spp LIKE '%$dataCari%' ORDER BY id_spp ";
  } else {
    $sql = "SELECT * FROM spp ORDER BY id_spp ";
  }

  // Menjalankan query di atas
  $myquery = mysqli_query($connection, $sql)  or die("Query salah : " . mysqli_connect_error());

  while ($mydata = mysqli_fetch_array($myquery)) {
    $Kode = $mydata['id_spp'];
  ?>
    <tr>
      <td><?php echo $mydata['id_spp']; ?></td>
      <td><?php echo $mydata['tahun']; ?></td>
      <td><?php echo $mydata['nominal']; ?></td>


    </tr>
  <?php } ?>
</table>


<div class="tanda-tangan">
  <p><b>Admin</p>
  <br>
  <br>
  <p>(..................)</p>
</div>