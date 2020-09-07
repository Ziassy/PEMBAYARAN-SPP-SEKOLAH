<?php
include "koneksi.php";
$user	= $_POST['inputusername'];
$pass	= md5($_POST['inputpassword']);
$login	= mysqli_query($connection, "SELECT * FROM petugas WHERE username='$user' AND password='$pass'");
//query berfungsi untuk mengeksekusi query
$ketemu	= mysqli_num_rows($login);
if ($ketemu > 0) {
	session_start();
	$datalogin = mysqli_fetch_array($login); //memecah data menjadi perkolom di dlm array.
	$_SESSION['username'] = $datalogin['username'];
	$_SESSION['password'] = $datalogin['password'];
	$_SESSION['level'] = $datalogin['level'];
	if ($datalogin['level'] == "admin") {
		header("location:media_admin.php?module=home");
	} else if ($datalogin['level'] == "petugas") {
		header("location:media_petugas.php?module=home");
	} else {
		header("location:media_pengguna.php?module=home");
	}
} else {
	?>
	<script>
		alert('Maaf, Username atau Password salah.');
		window.location.href = 'index.php';
	</script>
<?php
}
?>