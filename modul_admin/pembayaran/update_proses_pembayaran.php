<?php
include "koneksi.php";

$pembayaran = $_POST['pembayaran']; // harus sama dengan name di tarif
$idPetugas = $_POST['idPetugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bln_dibayar = $_POST['bln_dibayar'];
$thn_dibayar = $_POST['thn_dibayar'];
$jml_dibayar = $_POST['jml_dibayar'];
$query = "UPDATE pembayaran SET 
id_pembayaran='$pembayaran', 
id_petugas='$idPetugas',
nisn='$nisn',
tgl_bayar ='$tgl_bayar',
bulan_dibayar ='$bln_dibayar',
tahun_dibayar ='$thn_dibayar',
jumlah_bayar ='$jml_dibayar'

WHERE id_pembayaran ='$pembayaran' ";


$cekquery = mysqli_query($connection, $query);
if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location = 'media_admin.php?module=pembayaran';
	</script>

<?php
} else {
?>
	<script>
		alert('Gagal di tambahkan!');
		location = 'media_admin.php?module=pembayaran';
	</script>
<?php
}
?>