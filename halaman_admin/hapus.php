<?php
include_once"../config/koneksi.php";
$idhapus=$_GET['idhapus'];

if(empty ($idhapus)){
	echo "Data yang dihapus belum dipilih";
}
else{
$sql_hapus="DELETE FROM testimonial WHERE id='$idhapus'";
mysql_query($sql_hapus,$conn)
or die("Gagal perintah hapus".mysql_error());
echo"Penghapusan data berhasil";
	include "home.php";
	exit;
}
?>

