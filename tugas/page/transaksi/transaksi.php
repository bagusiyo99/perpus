 
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
                                            <th>isbn</th>
                                            <th>id</th>
                                            <th>judul</th>
                                            <th>nama</th>
                                            <th>tanggal pinjam</th>
                                            <th>tanggal kembali</th>
                                            <th>terlambat</th>
                                            <th>status</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                    	$no=1;
                                    	$sql= $koneksi->query ("select *from db_transaksi where status='pinjam'");
                                    	while ($data=$sql->fetch_assoc()){
                                    	 ?>
                                    	
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data ['isbn'];?></td>
                                            <td><?php echo $data ['id'];?></td>
                                            <td><?php echo $data ['judul'];?></td>
                                            <td><?php echo $data ['nama'];?></td>
                                            <td><?php echo $data ['tgl_pinjam'];?></td>
                                            <td><?php echo $data ['tgl_kembali'];?></td>
                                            <td>
                                                <?php

                                                      $denda = 1000;

                                                      $tgl_dateline= $data ['tgl_kembali'];
                                                      
                                                      $tgl_kembali = date('d-m-y');

                                                      $lambat = terlambat ($tgl_dateline,$tgl_kembali);
                                                      $denda1=$lambat*$denda;
                                                      
                                                      if ($lambat>0) {
                                                          echo "<font color='red' >$lambat hari <br> (Rp $denda1) </font>";
                                                      
                                                      }else {
                                                          echo $lambat."hari";
                                                      }

                                                 ?>     



                                                



                                            </td>
                                            <td><?php echo $data ['status'];?></td>
                                            <td> 
                                            	<a href="?page=transaksi&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">edit </a>
                                            	<a onclick="return confirm ('Anda Yakin Akan Mengapus Data ini.....???)"
                                                    href="?page=transaksi&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">hapus </a>
                                                <a href="?page=transaksi&aksi=pengembalian&id=<?php echo $data['id']; ?> &judul=<?php echo $data['judul'];?>" class="btn btn-info">pengembalian</a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <br>

                                    <a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom:8px;">Tambah Data </a>
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