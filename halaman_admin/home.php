<?php session_start();
if(ISSET($_SESSION['username'])){
include"../config/koneksi.php";
?>

<!DOCTYPE html>
<html >
<head>
    <title>ADMIN PANEL</title>
  
  
  		<link rel="shortcut icon" href="icon/favicon.ico">
      <link rel="stylesheet" href="yoi.css">

  
</head>

<body>

	<div class="header">



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
        <a class="active">Dashboard</a>
      </li>
      <li>
        <a href="testimoni.php">Testimonial</a>
      </li>
      <li>
        <a href="Slideshow.php">SlideShow</a>
      </li>
      <li>
          <a href="../home.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
    
  	<h3 class="dash"> Dashboard </h3>
  	<br><br><br>

    <div class="visit">

    	<h2>TOTAL VISITORS</h2><br>

    	<?php 
	
		//kombinasi format tanggal dan jam
	 	echo date("d-m-Y  h:i a");
		?>
    	
    	<br><br><br>
    	<strong> 200 </strong>
    </div>

<div class="visit2">
  	<img src="icon/user.png" width="80px" height="60px">
  	<div class="vertical">
  		<strong> 1 </strong><br><br>
  		<h2>Administrator</h2>

  	</div>

 <div class="visit3">
 	
 	<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

<!----
/*Menampilkan Waktu*/
-->

<h2 class="jam">
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
<span id="clock"></span>
</h2>

<!----
Selesai Menampilkan Waktu*/


Menampilakan Hari*/
-->

<br>
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jum'at";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,

<!----Selesai Menampilkan Hari
-->

<!----Menampilkan Tanggal-->
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>

<br><br><br>
<hr class="color">

<img class="gmbr1" src="icon/clock.png" width="22px" height="22px">
<img class="gmbr2" src="icon/calender.png" width="22px" height="22px">
<img class="gmbr3" src="icon/bell.png" width="28px" height="28px">
 </div>


  </div>
  <br><br><br><br>
  <div class="reservasi">
<h5> Reservasi </h5>
</div>
<br><br>
    <table border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
  <td width="80%" style="padding-right:30px;">
  <table class="table1" width="85%">
  <tr class="th">
  <th width="90">ID</th>
  <th width="100">Nama</th>
  <th width="120">Phone</th>
  <th width="100">Rooms</th>
  <th width="100">Start</th>
  <th width="100">Finish</th>
  <th width="100">Capacity</th>
  <th width="100">Code</th>
  <th width="100">Actions</th>
  </tr>
  </table>

  <?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
include_once"../config/koneksi.php";
include_once"liblary.php";
$sql_news="SELECT id,nama,phone,room,start,finish,capacity,kode FROM form ORDER BY id";
$qry_news=mysql_query($sql_news,$conn)  
or die("gagal menampilkan".mysql_error());
while($hsl_news=mysql_fetch_array($qry_news)){
?>
</div>


<table class="table" width="85%">
<tr class="th" bgcolor="#FFF">
<td width="90" align="center"><?php echo"$hsl_news[id]";?></td>    
<td width="90" align="center"><?php echo "$hsl_news[nama]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[phone]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[room]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[start]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[finish]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[capacity]";?></td>
<td width="90" align="center"><?php echo "$hsl_news[kode]";?></td>
<td width="90" align="center">
  
  <?php
  echo "
  <a href='hapus3.php?id=$hsl_news[id]'>
<button class=book2>
          HAPUS
        </button>
        </a>

</td>
</tr></table>";?>
<?php
}
?>

<?php
}else{ 
?>
<script language="JavaScript">alert('Anda tidak boleh mengakses halaman ini, Silahkan login dahulu');
document.location=('../admin/index.html')</script>
<?php 
}
?>


</body>
</html>


