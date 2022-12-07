<?php
$kode2=$_GET['id'];
$sql= $koneksi->query ("delete from db_buku where kode='$kode2'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert ("data berhasil dihapus");
 			
 			window.location.href="?page=buku";
 		</script>
 		<?php

}
?>
