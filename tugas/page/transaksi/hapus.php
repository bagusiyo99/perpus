<?php
$kode=$_GET['id'];
$sql= $koneksi->query ("delete from db_transaksi where id='$kode'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert ("data berhasil dihapus");
 			
 			window.location.href="?page=transaksi";
 		</script>
 		<?php

}
?>