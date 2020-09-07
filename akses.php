<?php
if (!isset($_SESSION['username'])) {
	echo '
		<script language="javascript">
			alert("Anda harus Login!");
			document.location="../index.php";
		</script>';
}
