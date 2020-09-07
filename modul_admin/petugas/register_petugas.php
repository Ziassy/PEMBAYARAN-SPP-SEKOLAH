<?php
include "koneksi.php";

$idPetugas = $_POST['idPetugas']; // harus sama dengan name di tarif
$username = $_POST['username'];
$password = md5($_POST['password']);
$namaLengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];
$query = "INSERT into petugas values ('$idPetugas', '$username', '$password','$namaLengkap','$level')";

$cekquery = mysqli_query($connection, $query);

if ($cekquery) {
	?>

	<script>
		alert('Data berhasil di tambahkan!');
		location = 'media_admin.php?module=petugas';
	</script>

<?php
} else {
	?>
	<script>
		alert('Gagal di tambahkan!');
		location = 'media_admin.php?module=petugas';
	</script>
<?php
}
?>