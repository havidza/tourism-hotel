<?php
// include database connection file
$link = mysqli_connect("localhost", "root", "", "hotel");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$gambar=$_POST['gambar'];
	$caption=$_POST['caption'];
		
	// update user data
	$result = mysqli_query($link, "UPDATE slideshow SET gambar='$gambar',caption='$caption'  WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: slideshow.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM slideshow WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
		$gambar = $row['gambar'];
	$caption = $row['caption'];
}
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
        <a href="testimoni.php">Testimonial</a>
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
   

	
	<form name="update_user" method="post" action="edit2.php">
		<table border="0" class="table1" width="85%">
			<tr class="th">
			<th width="90">EDIT DATA SLIDESHOW</th>
		</tr>
	</table>

		<br><br>
		<TABLE border="0">	
			<td><b>Gambar</b><div class="desc"> Masukan Gambar</div><div class="desc"> .</div></td>
			<td>:</td>
				<td><input type="file" name="gambar" value=<?php echo $gambar;?>></td>
			</tr>
			<tr>
				<td><b>Caption</b><div class="desc"> Masukan Caption</div></td>
			<td>:</td>

				<td><textarea name="caption" cols="40" rows="4" value=<?php echo $caption;?>>
				</textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="book3" name="update" value="Update"></td>
			</tr>
		</table>
	</form>


</div>
</div>
</body>
</html>