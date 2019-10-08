<?php        
  if (isset($_POST['kirim'])){
    include"config/koneksi.php";
    $nama=$_POST['nama'];
    $kls=$_POST['kelas'];
    $sklh=$_POST['sekolah'];
    $mapel=$_POST['mapel'];
            
    $query ="SELECT max(kode_user) as maxKode FROM tbl_daftar";
    $hasil = mysqli_query($connect,$query);
    $data =mysqli_fetch_array($hasil);
    $kodeUser=$data['maxKode'];
    $noUrut=(int) substr($kodeUser, 3);
    $noUrut++;
    $char="PLM";
    $kodeUser = $char. sprintf("%04s",$noUrut);

    $sql="INSERT INTO tbl_daftar(kode_user,nama,kelas,sekolah,mapel) VALUES('$kodeUser','$nama', '$kls', '$sklh', '$mapel')";
    $result = mysqli_query($connect, $sql);
    if($result){
    echo"<script>
    window.alert('Selamat!!! Anda berhasil mendaftar');
    </script>";
    ?><script>window.location.replace("hasil_daftar.php");</script><?php
    } else{
    echo"<script>
    window.alert('Gagal');
    </script>";
  }}
?>