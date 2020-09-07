<?php
include "../../koneksi.php";
$hasil2 = mysqli_query($connection, "select * from pembayaran order by id_pembayaran");
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
  <h2>Laporan pembayaran</h2>
</center>
<table>
  <tr>
    <th>ID BAYAR</th>
    <th>ID PETUGAS</th>
    <th>NISN</th>
    <th>TANGGAL</th>
    <th>BULAN DIBAYAR</th>
    <th>TAHUN DIBAYAR</th>
    <th>JUMLAH BAYAR</th>

  </tr>

  <script>
    window.print();
  </script>
  <?php
  # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  if (isset($_POST['btnCari'])) {
    $sql = "SELECT * FROM pembayaran WHERE id_pembayaran LIKE '%$dataCari%' ORDER BY id_pembayaran ";
  } else {
    $sql = "SELECT * FROM pembayaran ORDER BY id_pembayaran ";
  }

  // Menjalankan query di atas
  $myquery = mysqli_query($connection, $sql)  or die("Query salah : " . mysqli_connect_error());

  while ($mydata = mysqli_fetch_array($myquery)) {
    $Kode = $mydata['id_pembayaran'];
  ?>
    <tr>
      <td><?php echo $mydata['id_pembayaran']; ?></td>
      <td><?php echo $mydata['id_petugas']; ?></td>
      <td><?php echo $mydata['nisn']; ?></td>
      <td><?php echo $mydata['tgl_bayar']; ?></td>
      <td><?php echo $mydata['bulan_dibayar']; ?></td>
      <td><?php echo $mydata['tahun_dibayar']; ?></td>
      <td><?php echo $mydata['jumlah_bayar']; ?></td>

    </tr>
  <?php } ?>
</table>


<div class="tanda-tangan">
  <p><b>Admin</p>
  <br>
  <br>
  <p>(..................)</p>
</div>