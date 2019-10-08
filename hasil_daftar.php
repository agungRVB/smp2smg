<?php
// if($_GET) {
//   if(isset($_POST['save'])){ 
//     include "config/koneksi.php";
//     $nama=$_POST['nama'];
//     $kls=$_POST['kelas'];
//     $sklh=$_POST['sekolah'];
//     $mapel=$_POST['mapel'];
//     $bukti=$_POST['bukti'];

//    $mySqls  = "UPDATE tbl_daftar SET nama='$nama',kelas='$kls',sekolah='$sklh',mapel='$mapel',bukti='$bukti' WHERE  kode_user='$_GET[kode_user]'"; 

//     $myQry=mysqli_query($mySqls, $connect) or die ("Gagal query".mysqli_error());
//       if($myQry){
//       echo"<script>
//         window.alert('Data Berhasil Tersimpan');
//              </script>";  
//       echo "<meta http-equiv='refresh' content='0; url=form_daftar.php'>";
//       }
//     exit;
//   }
// }
# TAMPILKAN DATA DARI DATABASE,
  include "config/koneksi.php";
  $data = mysqli_query($connect, "SELECT * FROM tbl_daftar ORDER BY kode_user DESC LIMIT 1");
  $kolomData = mysqli_fetch_array($data);
    $dataKU   = $kolomData['kode_user'];
    $datanama   = $kolomData['nama'];
    $datakelas     = $kolomData['kelas'];
    $datasekolah  = $kolomData['sekolah'];
    $datamapel    = $kolomData['mapel'];
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Hasil Pendaftaran Peserta</title>
      <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
      <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins 
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  </head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue-light layout-top-nav">
  <div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="logo">
            <span class="logo-lg"><b>SMP N 2 Semarang</b></span>
          </a>
        </div>

<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li> <a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peserta<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Pendaftaran</a></li>
                <li class="divider"></li>
                <li><a href="#">Daftar Peserta Lomba</a></li>
              </ul>
            </li>
             <li><a href="#">Login</a></li>
          </ul>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>     
      </div>
    </nav>
  </header>

  <!-- Full Width Column -->
  <div class="content">
    <div class="container">  
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Hasil Pendaftaran Peserta</h3>
            </div>
            <!-- /.box-header -->
            <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" class="form-horizontal">
              <div class="box-body">

                <div class="form-group" style="margin-right:90px";>
                 <label for="input1" class="col-sm-2 control-label">Nomor Pendaftaran</label>
                  <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                 <input class="form-control" id="input1" name="kode_user" value="<?php echo $dataKU ?>" type="text" >
                    </div>
                </div>
                
                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control" id="input1" name="nama" value="<?php echo $datanama ?>" type="text">
                    </div>
                </div>
                
                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control" id="input1"  name="kelas" value="<?php echo $datakelas ?>" type="text">
                    </div>
                </div>
                
                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Sekolah</label>
                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control" id="input1" name="sekolah" value="<?php echo $datasekolah ?>" type="text">
                    </div>
                </div>

                <div class="form-group" style="margin-right:107px;">
                  <span style="position:relative; ">
                    <label for="input1" class="col-sm-2 control-label">Pelajaran</label>
                  </span>
                  <div class="col-sm-5" style="padding: 0px 0px 0px 35px;">
                    <select  name="mapel" aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                      <option value="<?php echo $datamapel ?>"></option>
                      <option>Matematika</option>
                      <option>Pengetahuan Alam</option>
                      <option>Bahasa Inggris</option>
                      <option>Bahasa Indonesia</option>
                      </select>
                  </div>
                </div>
              </div>

              <div class="form-group" style="margin-right:107px;">
                  <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                  <input type="file" name="bukti" id="exampleInputFile" style="padding: 0px 0px 0px 40px;">

                  <p class="help-block" style="padding: 0px 0px 0px 213px;">Upload Bukti Transfer Anda</p>
              </div>
                                 
              <!-- /.box-body -->
              <div class="box-footer">
                <div style="margin-left:200px">
                  <button type="submit" name="save"class="btn btn-info pull-default">Simpan</button>
                  <button type="submit" class="btn btn-default">Batal</button>
                </div>
              </div>
            </form>
      </div>    
    </div>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs"></div>
        <td height="59"><p align="center" class="style7">SMP Negeri 2 Semarang<br/>
            Jl. Brigjend Katamso No. 14, Kec.Semarang Timur, Kota Semarang, Jawa Tengah 50242; Telp (024)8414168, Faks (024)8411211, Email : smpn2_semarang@yahoo.com<br/>
            PRIMA DALAM PRESTASI, BERKARAKTER, DAN PEDULI LINGKUNGAN</p></td>
    </div>
  </footer>
  </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
   //Date picker
    $('#datepicker').datepicker({
      autoclose: true
      });
  });
</script>
</body>
</html>
