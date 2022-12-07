<?php

$id=$_GET['id'];
$judul=$_GET['judul'];

$sql= $koneksi->query ("update db_transaksi set status='pengembalian' where id='$id'");

$sql= $koneksi->query ("update db_buku set jumblah_buku =(jumblah_buku+1) where judul='$judul'");

 ?>
        <script type="text/javascript">
            alert ("proses pengembalian buku berhasil");
            window.location.href="?page=transaksi";
        </script>
        <?php

 ?>        