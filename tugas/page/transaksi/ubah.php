 <?php
$kode2=$_GET['id'];
$sql= $koneksi->query ("select *from db_transaksi where id='$kode2'");
$tampil=$sql ->fetch_assoc();
?>
  <div class="panel panel-default">
 <div class="panel-heading">
 	 <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			selamat bekerja di bagus univ
		</marquee>
		</div>
	</div>
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3>welcome</h3>
                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>isbn</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil ['isbn'] ?>" />
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>id</label>
                                            <input class="form-control" name="id" value="<?php echo $tampil ['id'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil ['judul'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil ['nama'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal pinjam</label>
                                            <input class="form-control" name="tgl_pinjam" value="<?php echo $tampil ['tgl_pinjam'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal kembali</label>
                                            <input class="form-control" name="tgl_kembali" value="<?php echo $tampil ['tgl_kembali'] ?>" />
                                            
                                        </div>         
                                            <div class="form-group">
                                            <label>status</label>
                                            <input class="form-control" name="status" value="<?php echo $tampil ['status'] ?>" />
                                            
                                        </div>                
                                      <div>
                                      	  <input type="submit" name="simpan" value="edit" class="btn btn-primary">


                                      </div>
                                    </form>  
                                </div>
                            </div>
 </div> 
 </div>
 </div>                                      

 
 <?php
 $isbn=$_POST ['isbn'];
 $id=$_POST ['id'];
 $judul=$_POST ['judul'];
 $nama=$_POST ['nama'];
 $tgl_pinjam=$_POST ['tgl_pinjam'];
 $tgl_kembali=$_POST ['tgl_kembali'];
 $status=$_POST['status'];
 

 $simpan=$_POST ['simpan'];
 if ($simpan) {
    $sql= $koneksi->query ("update db_transaksi set id='$id',judul='$judul',nama='$nama',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali',status='$status' where isbn='$isbn'");
        
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert ("data berhasil diubah");
            window.location.href="?page=transaksi";
        </script>
        <?php
    }   
 }

 ?>