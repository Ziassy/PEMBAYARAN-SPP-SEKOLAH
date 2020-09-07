<?php
include "koneksi.php";

$nisn = $_POST['nisn']; // harus sama dengan name di tarif
$nis = $_POST['nis'];
$nama = $_POST['nama'];

$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
// $idspp = $_POST['idspp'];
$query = "UPDATE siswa SET 
nisn='$nisn', 
nis='$nis',
nama='$nama',
alamat ='$alamat',
no_tlp ='$tlp'


WHERE nisn ='$nisn' ";

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