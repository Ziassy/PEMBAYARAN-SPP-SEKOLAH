<?php
include "../../koneksi.php";
$hasil2 = mysqli_query($connection, "select * from petugas order by id_petugas");
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
  <h2>Laporan petugas</h2>
</center>
<table>
  <tr>
    <th>ID PETUGAS</th>
    <th>USERNAME</th>
    <th>NAMA LENGKAP</th>
    <th>LEVEL</th>

  </tr>

  <script>
    window.print();
  </script>
  <?php
  # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  if (isset($_POST['btnCari'])) {
    $sql = "SELECT * FROM petugas WHERE id_petugas LIKE '%$dataCari%' ORDER BY id_petugas ";
  } else {
    $sql = "SELECT * FROM petugas ORDER BY id_petugas ";
  }

  // Menjalankan query di atas
  $myquery = mysqli_query($connection, $sql)  or die("Query salah : " . mysqli_connect_error());

  while ($mydata = mysqli_fetch_array($myquery)) {
    $Kode = $mydata['id_petugas'];
  ?>
    <tr>
      <td><?php echo $mydata['id_petugas']; ?></td>
      <td><?php echo $mydata['username']; ?></td>
      <td><?php echo $mydata['nama_petugas']; ?></td>
      <td><?php echo $mydata['level']; ?></td>


    </tr>
  <?php } ?>
</table>


<div class="tanda-tangan">
  <p><b>Admin</p>
  <br>
  <br>
  <p>(..................)</p>
</div>