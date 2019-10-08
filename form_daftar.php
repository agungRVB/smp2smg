<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Formulir Pendaftaran Lomba</title>
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
          <h3 class="box-title">Form Pendaftaran Peserta Lomba</h3>
            </div>
            <!-- /.box-header -->
          <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" class="form-horizontal">
            <div class="box-body">

                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control" name="nama" id="input1" placeholder=" Nama Lengkap" type="text">
                    </div>
                </div>
                
                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control"  name="kelas" id="input1" placeholder=" Kelas Sekarang" type="text">
                    </div>
                </div>
                
                <div class="form-group" style="margin-right:90px";>
                  <label for="input1" class="col-sm-2 control-label">Sekolah</label>
                    <div class="col-sm-5" style="padding: 0px 0px 0px 33px;">
                      <input class="form-control"  name="sekolah" id="input1" placeholder=" Asal Sekolah Dasar" type="text">
                    </div>
                </div>

                <div class="form-group" style="margin-right:107px;">
                  <label for="input1" class="col-sm-2 control-label" style="padding-left:70px;">Pelajaran</label>
                  <div class="col-sm-5" style="padding: 0px 0px 0px 35px;">
                    <select name="mapel" class="form-control select2 select2-hidden-accessible" id="mapel" style="width: 100%;">
                      <option selected="selected">--pilih--</option>
                      <option>Matematika</option>
                      <option>Pengetahuan Alam</option>
                      <option>Bahasa Inggris</option>
                      <option>Bahasa Indonesia</option>
                      </select>
                  </div>
                </div>
              </div>
                                 
              <!-- /.box-body -->
              <div class="box-footer">
                <div style="margin-left:185px; padding:15px;">
                  <button type="submit" name="kirim" class="btn btn-info pull-default">Daftar</button>
                  <button type="submit" class="btn btn-default" style="margin-left:10px;">Batal</button>
                </div>
              </div>
            </form>

              <?php include "proses.php";?>
              
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
