<?php
include "koneksi.php";

$nisn = $_POST['nisn']; // harus sama dengan name di tarif
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$idkelas = $_POST['idkelas'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$idspp = $_POST['idspp'];
$query = "INSERT into siswa values ('$nisn', '$nis', '$nama','$idkelas','$alamat','$tlp','$idspp')";

$cekquery = mysqli_query($connection, $query);

if ($cekquery) {
	?>

	<script>
		alert('Data berhasil di tambahkan!');
		location = 'media_admin.php?module=siswa';
	</script>

<?php
} else {
	?>
	<script>
		alert('Gagal di tambahkan!');
		location = 'media_admin.php?module=siswa';
	</script>
<?php
}
?>