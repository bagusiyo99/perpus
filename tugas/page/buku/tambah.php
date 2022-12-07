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
                                            <label>kode</label>
                                            <input class="form-control" name="kode" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>isbn</label>
                                            <input class="form-control" name="isbn" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>jumblah buku</label>
                                            <input class="form-control" name="jumblah buku" />
                                            
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
 $kode=$_POST ['kode'];
 $judul=$_POST ['judul'];
 $pengarang=$_POST ['pengarang'];
 $penerbit=$_POST ['penerbit'];
 $isbn=$_POST ['isbn'];
 $jumblah_buku=$_POST ['jumblah_buku'];

 $simpan=$_POST ['simpan'];
 if ($simpan) {
 	$sql= $koneksi->query ("insert into db_buku (kode,judul,pengarang,penerbit,isbn,jumblah_buku)
 		values('$kode','$judul','$pengarang','$penerbit','$isbn','$jumblah_buku')");
 	if ($sql) {
 		?>
 		<script type="text/javascript">
 			alert ("data berhasil disimpan");
 			window.location.href="?page=buku";
 		</script>
 		<?php
 	}	
 }

 ?>