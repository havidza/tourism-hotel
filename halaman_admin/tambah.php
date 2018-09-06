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
        <a class="active">Add  Data</a>
      </li>
      <li>
        <a href="slideshow.php">Slideshow</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
   
  
<table class="table1" width="85%">
<tr class="th">
<th width="90">ADD DATA TESTIMONIAL</th>
<form action="tambah.php" method="post" name="form1">
<table>
<tr>
  <br><br><br>
<td><b>Nama </b><div class="desc">Masukkan Nama</div></td>
<td>:</td>
<td><input name="nama" type="text" size="50" maxlength="200">
<input name="id" type="hidden"></td>
</tr>
<tr>
<tr>
<td><b>Isi Testimonial</b><div class="desc">Masukkan Isi Testimonial</div></td>
<td>:</td>
<td><textarea name="isian" cols="52" rows="8" >
</textarea></td>
<tr>
<td></td>
<td align="center">
  <br><br><input class="book2" name="submit" type="submit" value="Tambah"></td>
</table>
</form>
    
    <?php
 
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $isi = $_POST['isian'];
    
    // include database connection file
    $link = mysqli_connect("localhost", "root", "", "hotel");
        
    // Insert user data into table
    $result = mysqli_query($link, "INSERT INTO testimonial (nama,isian) VALUES('$name','$isi')");
    
    // Show message when user added
    echo "User added successfully. <a href='testimoni.php'>View Users</a>";
  }
  ?>
 </div>

  </div>


 

</body>
</html>