 
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
                                            <th>id</th>
                                            <th>nama</th>
                                            <th>meminjam</th>
                                            <th>jurusan</th>                                
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        $sql= $koneksi->query ("select *from db_anggota");
                                        while ($data=$sql->fetch_assoc()){
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data ['id'];?></td>
                                            <td><?php echo $data ['nama'];?></td>
                                            <td><?php echo $data ['meminjam'];?></td>
                                            <td><?php echo $data ['jurusan'];?></td>                                          
                                            <td> 
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">edit</a>
                                                <a onclick="return confirm ('Anda Yakin Akan Mengapus Data ini.....???)"
                                                    href="?page=anggota&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-warning">hapus </a>
                                                

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <br>

                                    <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom:8px;">Tambah Data </a>
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