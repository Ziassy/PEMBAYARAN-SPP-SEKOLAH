<?php
include "../../koneksi.php";
$hasil2 = mysqli_query($connection, "select * from kelas order by id_kelas");
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
  <h2>Laporan kelas</h2>
</center>
<table>
  <tr>
    <th>ID KELAS</th>
    <th>NAMA KELAS</th>
    <th>KOMPETENSI KEAHLIAN</th>

  </tr>

  <script>
    window.print();
  </script>
  <?php
  # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  if (isset($_POST['btnCari'])) {
    $sql = "SELECT * FROM kelas WHERE id_kelas LIKE '%$dataCari%' ORDER BY id_kelas ";
  } else {
    $sql = "SELECT * FROM kelas ORDER BY id_kelas ";
  }

  // Menjalankan query di atas
  $myquery = mysqli_query($connection, $sql)  or die("Query salah : " . mysqli_connect_error());

  while ($mydata = mysqli_fetch_array($myquery)) {
    $Kode = $mydata['id_kelas'];
  ?>
    <tr>
      <td><?php echo $mydata['id_kelas']; ?></td>
      <td><?php echo $mydata['nama_kelas']; ?></td>
      <td><?php echo $mydata['kompetensi_keahlian']; ?></td>

    </tr>
  <?php } ?>
</table>


<div class="tanda-tangan">
  <p><b>Admin</p>
  <br>
  <br>
  <p>(..................)</p>
</div>