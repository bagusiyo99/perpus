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
                                            <label>id</label>
                                            <input class="form-control" name="id" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>meminjam</label>
                                            <input class="form-control" name="meminjam" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>jurusan</label>
                                            <input class="form-control" name="jurusan" />
                                            
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
 $id=$_POST ['id'];
 $nama=$_POST ['nama'];
 $meminjam=$_POST ['meminjam'];
 $jurusan=$_POST ['jurusan'];
 

 $simpan=$_POST ['simpan'];
 if ($simpan) {
    $sql= $koneksi->query ("insert into db_anggota (id,nama,meminjam,jurusan)
        values('$id','$nama','$meminjam','$jurusan')");
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert ("data berhasil disimpan");
            window.location.href="?page=anggota";
        </script>
        <?php
    }   
 }

 ?>