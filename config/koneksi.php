<?php
#**************** koneksi ke mysql *****************#
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="hotel";
$conn= mysql_connect($host,$user,$pass)
or die("gagal konek ke server MySql".mysql_error());
//select database
$sele= mysql_select_db($dbname)
or die("Gagal membuka database $dbname".mysql_error());

?>