 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">                      
                        <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			WELCOME DI PERPUSTAKAAN BAGUS 
		</marquee>
		</div>
		</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>kode</th>
                                            <th>judul</th>
                                            <th>pengarang</th>
                                            <th>penerbit</th>
                                            <th>isbn</th>
                                            <th>jumblah buku</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                    	$no=1;
                                    	$sql= $koneksi->query ("select *from db_buku");
                                    	while ($data=$sql->fetch_assoc()){
                                    	 ?>
                                    	
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data ['kode'];?></td>
                                            <td><?php echo $data ['judul'];?></td>
                                            <td><?php echo $data ['pengarang'];?></td>
                                            <td><?php echo $data ['penerbit'];?></td>
                                            <td><?php echo $data ['isbn'];?></td>
                                            <td><?php echo $data ['jumblah_buku'];?></td>
                                            <td> 
                                            	<a href="?page=buku&aksi=ubah&id=<?php echo $data['kode']; ?>" class="btn btn-info">edit </a>
                                            	<a onclick="return confirm ('Anda Yakin Akan Mengapus Data ini.....???)"
                                                    href="?page=buku&aksi=hapus&id=<?php echo $data['kode']; ?>" class="btn btn-danger">hapus </a>
                                                

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <br>

                                    <a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom:8px;">Tambah Data </a>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </br>
                                </tbody>


                                    </tbody>
                 </div> 
                        </div> 
                        </div> 
                        </div>            