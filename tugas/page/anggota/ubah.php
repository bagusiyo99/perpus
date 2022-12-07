<?php
$kode2=$_GET['id'];
$sql= $koneksi->query ("select *from db_anggota where id='$kode2'");
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
                                            <label>id</label>
                                            <input class="form-control" name="id" value="<?php echo $tampil ['id'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>meminjam</label>
                                            <input class="form-control" name="meminjam" value="<?php echo $tampil ['meminjam'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>jurusan</label>
                                            <input class="form-control" name="jurusan" value="<?php echo $tampil ['jurusan'] ?>"/>
                                            
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
 $id=$_POST ['id'];
 $nama=$_POST ['nama'];
 $meminjam=$_POST ['meminjam'];
 $jurusan=$_POST ['jurusan'];
 
 $simpan=$_POST ['simpan'];

 if ($simpan) {
    $sql= $koneksi->query ("update db_anggota set id='$id',nama='$nama', meminjam='$meminjam', jurusan='$jurusan' where id='$id'");
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert ("data berhasil diubah");
            window.location.href="?page=anggota";
        </script>
        <?php
    }   
 }

 ?>