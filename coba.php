<?php

include "config/koneksi.php";

$query ="SELECT max(kode_barang) as maxKode FROM tbl_barang";
$hasil = mysqli_query($connect,$query);
$data =mysqli_fetch_array($hasil);
$kodeBarang=$data['maxKode'];

$noUrut=(int) substr($kodeBarang, 3,3);
$noUrut++;
$char="PLM";
$kodeBarang = $char. sprintf("%03s",$noUrut);
echo $kodeBarang
?>
