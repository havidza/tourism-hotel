<?php
include "../config/koneksi.php";
include "liblary.php"; 
$idubah=$_GET['idubah'];
$sql_news="SELECT*FROM testimonial WHERE id ='$idubah'";
$qry_news=mysql_query($sql_news,$conn)
or die("gagal menampilkan".mysql_error());
$hsl_news=mysql_fetch_array($qry_news);
$data_idberita  =$hsl_news['id'];
$data_nama     =$hsl_news['nama'];
$data_berita    =$hsl_news['isi'];
?>


<!DOCTYPE html>
<html >
<head>
    <title>ADMIN PANEL</title>
  
  
  		<link rel="shortcut icon" href="icon/favicon.ico">
      <link rel="stylesheet" href="yoi.css">

  
</head>

<body>

	<div class="header2">

		<div class="pojok">
			<a href="../home.php"><img src="icon/out.png" width="25px" height="25px"></a>

		</div>
	</div>

  <div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      <img src="icon/user2.png" width="60px" height="60px">
      <br><br>
      Welcome User<br><br>
      <h4>admin</h4>
    </div>
    <ul class='nav'>
      <li>
        <a href="home.php">Dashboard</a>
      </li>
      <li>
        <a>Statistics</a>
      </li>
      <li>
        <a class="active">Add  Data</a>
      </li>
      <li>
        <a href="../home.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
   
  
<table class="table1" width="85%">
<tr class="th">
<th width="90">ADD DATA TESTIMONIAL</th>
<form action="simpan.php" method="post" name="form1" target="_self">
<table>
<tr>
  <br><br><br>
<td><b>Nama </b><div class="desc">Masukkan Nama</div></td>
<td>:</td>
<td><input name="nama" type="text" value="<?php echo"$data_nama";?>" size="50" maxlength="100">
<input name="id" type="hidden" value="<?php echo "$data_idberita";?>"></td>
</tr>
<tr>
<tr>
<td><b>Isi Testimonial</b><div class="desc">Masukkan Isi Testimonial</div></td>
<td>:</td>
<td><textarea name="isi" cols="45" rows="5">
<?php echo"$data_berita";?>
</textarea></td>
<tr>
<td></td>
<td align="center">
  <br><br><input class="book2" name="ubah" type="submit" value="Tambah"></td>
</table>
</form>
    
 </div>

  </div>


 

</body>
</html>

