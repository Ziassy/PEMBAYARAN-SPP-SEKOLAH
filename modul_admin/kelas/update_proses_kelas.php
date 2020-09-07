<?php
include "koneksi.php";

$idkelas = $_POST['idkelas']; // harus sama dengan name di tarif
$namakelas = $_POST['namakelas'];
$keahlian = $_POST['keahlian'];
$query = "UPDATE kelas SET 
id_kelas='$idkelas', 
nama_kelas='$namakelas',
kompetensi_keahlian='$keahlian'


WHERE id_kelas='$idkelas' ";

$cekquery = mysqli_query($connection, $query);
if ($cekquery) {
	?>

	<script>
		alert('Data berhasil di tambahkan!');
		location = 'media_admin.php?module=kelas';
	</script>

<?php
} else {
	?>
	<script>
		alert('Gagal di tambahkan!');
		location = 'media_admin.php?module=kelas';
	</script>
<?php
}
?>