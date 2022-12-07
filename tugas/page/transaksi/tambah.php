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
                                            <input class="form-control" name="isbn" />
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>id</label>
                                            <input class="form-control" name="id" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal pinjam</label>
                                            <input class="form-control" name="tgl_pinjam"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal kembali</label>
                                            <input class="form-control" name="tgl_kembali"  />
                                            
                                        </div>         
                                            <div class="form-group">
                                            <label>status</label>
                                            <input class="form-control" name="status"  />
                                            
                                        </div>                
                                      <div>
                                      	  <input type="submit" name="simpan" value="simpan" class="btn btn-primary">


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
    $sql= $koneksi->query ("insert into db_transaksi (isbn,id,judul,nama,tgl_pinjam,tgl_kembali,status)
        values('$isbn','$id','$judul','$nama','$tgl_pinjam','$tgl_kembali','$status')");
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert ("data berhasil disimpan");
            window.location.href="?page=transaksi";
        </script>
        <?php
    }   
 }

 ?>