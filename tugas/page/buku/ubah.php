<?php
$kode2=$_GET['id'];
$sql= $koneksi->query ("select *from db_buku where kode ='$kode2'");
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
                                            <label>kode</label>
                                            <input class="form-control" name="kode" value="<?php echo $tampil ['kode'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil ['pengarang'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil ['penerbit'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>isbn</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil ['isbn'] ?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>jumblah buku</label>
                                            <input class="form-control" name="jumblah_buku" value="<?php echo $tampil ['jumblah_buku'] ?>" />
                                            
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
 $kode=$_POST ['kode'];
 $judul=$_POST ['judul'];
 $pengarang=$_POST ['pengarang'];
 $penerbit=$_POST ['penerbit'];
 $isbn=$_POST ['isbn'];
 $jumblah_buku=$_POST ['jumblah_buku'];

 $simpan=$_POST ['simpan'];

 if ($simpan) {
    $sql= $koneksi->query ("update db_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', isbn='$isbn', jumblah_buku='$jumblah_buku' where kode='$kode'");
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert ("data berhasil diubah");
            window.location.href="?page=buku";
        </script>
        <?php
    }   
 }

 ?>