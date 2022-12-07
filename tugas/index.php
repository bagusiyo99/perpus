<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING ));
 ?>

<?php

$koneksi = new mysqli ("localhost","root","","perpus");
include "function.php";

    

   
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAGUS IYO</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >univ bagus</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-m-y');?> &nbsp;<a href="login.php " class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?page=home "><i class="glyphicon glyphicon-home fa-1x"></i>menu </a>
                    </li>
                    <li>
                        <a  href="?page=anggota"><i class="glyphicon glyphicon-user fa-1x"></i> data anggota</a>
                    </li>
                     <li>
                        <a  href="?page=buku"><i class="glyphicon glyphicon-list-alt fa-1x"></i> data buku</a>
                    </li>
                     <li>
                        <a  href="?page=transaksi"><i class=" glyphicon glyphicon-book fa-1x "></i> transaksi </a>
                    </li>
					                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php
                    $page=$_GET ['page'];
                    $aksi=$_GET ['aksi'];

                    if ($page == "anggota") {
                        if ($aksi == "") {
                            include "page/anggota/dataanggota.php";
                        }elseif ($aksi == "tambah") {
                            include "page/anggota/tambah.php";
                        }elseif ($aksi == "ubah") {
                            include "page/anggota/ubah.php";
                        }elseif ($aksi== "hapus") {
                            include "page/anggota/hapus.php";
                        }
                        }elseif ($page == "buku") {
                        if ($aksi == "") {
                            include "page/buku/databuku.php";
                        }elseif ($aksi == "tambah") {
                            include "page/buku/tambah.php";
                        }elseif ($aksi == "ubah") {
                            include "page/buku/ubah.php";
                        }elseif ($aksi== "hapus") {
                            include "page/buku/hapus.php";
                        } 
                        }elseif ($page == "transaksi") {
                        if ($aksi == "") {
                            include "page/transaksi/transaksi.php";
                        }elseif ($aksi== "tambah") {
                            include "page/transaksi/tambah.php";
                        }elseif ($aksi== "hapus") {
                            include "page/transaksi/hapus.php";
                        }elseif ($aksi == "ubah") {
                            include "page/transaksi/ubah.php";
                        }elseif ($aksi == "pengembalian") {
                            include "page/transaksi/pengembalian.php";
                        }  
                        }elseif ($page=="home") {
                           include "page/home.php";
                        }

                    ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></scrip>

</script>
</body>
</html>
