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
        <a href="home.php">Dashboard</a>
      </li>
      <li>
        <a href="testimoni.php">Testimonial</a>
      </li>
      <li>
        <a class="active">SlideShow</a>
      </li>
      <li>
          <a href="../home.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
    
    <h3 class="dash"> Slideshow</h3>
    <br><br><br>
    <a href='tambah2.php?id=$row[id]'>
<button class="booki">  
          + Tambah Data
        </button></a><br><br>

  <table class="table1" width="85%">
<tr class="th">
<th width="90">ID</th>
<th width="100">Gambar</th>
<th width="120">Caption</th>
<th width="100"> Actions </th>
</tr>
</table>

  <?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
// buat koneksi dengan MySQL, gunakan database: universitas
$link = mysqli_connect("localhost", "root", "", "hotel");
 
// jalankan query
$result = mysqli_query($link, "SELECT * FROM slideshow");
 
// tampilkan query
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  echo "
<table class=table width=85%>
<tr class=th bgcolor=#FFF>
<td width=150 align=center>".$row['id']."</td>    
<td width=100 align=center><img src=../gambar/".$row['gambar']." width=180 height=100> </td>
<td width=200 align=center>".$row['caption']."</td>
<td width=200 align=center>


<a href='edit2.php?id=$row[id]'>
<button class=book>
          EDIT 
        </button></a>

        
<a href='hapus2.php?id=$row[id]'>

<button class=book2>
          HAPUS
        </button>
        </a>

</td>";

}

?>

</div>


</body>
</html>