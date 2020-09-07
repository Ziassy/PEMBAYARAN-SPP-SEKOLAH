<?php
include "koneksi.php";

$idspp = $_POST['idspp']; // harus sama dengan name di tarif
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$query = "INSERT into spp values ('$idspp', '$tahun', '$nominal')";

$cekquery = mysqli_query($connection, $query);

if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location = 'media_admin.php?module=spp';
	</script>

<?php
} else {
?>
	<script>
		alert('Gagal di tambahkan!');
		location = 'media_admin.php?module=spp';
	</script>
<?php
}
?>