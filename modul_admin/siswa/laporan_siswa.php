<?php
include "../../koneksi.php";
$hasil2 = mysqli_query($connection, "select * from siswa order by nisn");
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
  <h2>Laporan siswa</h2>
</center>
<table>
  <tr>
    <th>NISN</th>
    <th>NIS</th>
    <th>NAMA</th>
    <th>ID SPP</th>
    <th>ID KELAS</th>
    <th>TELEPON</th>
    <th>ALAMAT</th>

  </tr>

  <script>
    window.print();
  </script>
  <?php
  # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  if (isset($_POST['btnCari'])) {
    $sql = "SELECT * FROM siswa WHERE nisn LIKE '%$dataCari%' ORDER BY nisn ";
  } else {
    $sql = "SELECT * FROM siswa ORDER BY nisn ";
  }

  // Menjalankan query di atas
  $myquery = mysqli_query($connection, $sql)  or die("Query salah : " . mysqli_connect_error());

  while ($mydata = mysqli_fetch_array($myquery)) {
    $Kode = $mydata['nisn'];
  ?>
    <tr>
      <td><?php echo $mydata['nisn']; ?></td>
      <td><?php echo $mydata['nis']; ?></td>
      <td><?php echo $mydata['nama']; ?></td>
      <td><?php echo $mydata['id_spp']; ?></td>
      <td><?php echo $mydata['id_kelas']; ?></td>
      <td><?php echo $mydata['no_tlp']; ?></td>
      <td><?php echo $mydata['alamat']; ?></td>

    </tr>
  <?php } ?>
</table>


<div class="tanda-tangan">
  <p><b>Admin</p>
  <br>
  <br>
  <p>(..................)</p>
</div>