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
<th width="90">ADD DATA SLIDESHOW </th>
<form action="tambah2.php" method="post" name="form1">
<table>
<tr>
  <br><br><br>
<td><b>Gambar </b><div class="desc">Masukkan Gambar</div></td>
<td>:</td>
<td><input name="gambar" type="file" size="50">
<input name="id" type="hidden"></td>
</tr>
<tr>
<tr>
<td><b>Isi Caption</b><div class="desc">Masukkan Isi Caption</div></td>
<td>:</td>
<td><input name="caption" type="text" size="40" maxlength="200"> </td>
<tr>
<td></td>
<td align="center">
  <br><br><input class="book2" name="submit" type="submit" value="Tambah"></td>
</table>
</form>
    
    <?php
 
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['submit'])) {
    $gambar = $_POST['gambar'];
    $capt = $_POST['caption']; 
    
    // include database connection file
    $link = mysqli_connect("localhost", "root", "", "hotel");
        
    // Insert user data into table
    $result = mysqli_query($link, "INSERT INTO slideshow (gambar,caption) VALUES('$gambar','$capt')");
    
    // Show message when user added
    echo "User added successfully. <a href='slideshow.php'>View Users</a>";
  }
  ?>
 </div>

  </div>


 

</body>
</html>