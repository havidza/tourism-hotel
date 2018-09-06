<!DOCTYPE html>
<html >
<head>
    <title>ADMIN PANEL</title>
  
  
      <link rel="shortcut icon" href="icon/favicon.ico">
      <link rel="stylesheet" href="yoi.css">

  
</head>

<!----

  Isi Actions
1 Sophita Martin, traveled on business  
"The rooms are big but the suite rooms are very large and spacious with separate living room and dining room and plush bath room with a tub. Stayed for 3 nights and the breakfast buffet is typical of Asian Hotels with a combination of Asian and Continental and American choices. Robinson's is a 5 minutes walk from hotel where you can shop and dine and the seedy part of Ermita is just an 8 minutes walk away."
---->
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
        <a class="active">Testimonial</a>
      </li>
      <li>
        <a href="slideshow.php">SlideShow</a>
      </li>
      <li>
          <a href="../home.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
    
<h5> Testimonial</h5>

<div class="reservasi">


<a href='tambah.php?id=$row[id]'>
<button class="booki">  
          + Tambah Data
        </button></a><br><br>

<table class="table1" width="100%">
<tr class="th">
<th width="90">ID</th>
<th width="100">Nama</th>
<th width="120">Isi</th>
<th width="100"> Actions </th>
</tr>
</table>

  <?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
// buat koneksi dengan MySQL, gunakan database: universitas
$link = mysqli_connect("localhost", "root", "", "hotel");
 
// jalankan query
$result = mysqli_query($link, "SELECT * FROM testimonial");
 
// tampilkan query
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  echo "
<table class=table width=100%>
<tr class=th bgcolor=#FFF>
<td width=180 align=center>".$row['id']."</td>    
<td width=200 align=center>".$row['nama']."</td>
<td width=300 align=center>".$row['isi']."</td>
<td width=200 align=center>

<a href='edit.php?id=$row[id]'>
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