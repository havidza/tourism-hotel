<?php
// include database connection file
$link = mysqli_connect("localhost", "root", "", "hotel");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Update']))
{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$isi=$_POST['isi'];
		
	// update user data
	$result = mysqli_query($link, "UPDATE testimonial SET nama='$nama',isi='$isi'  WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: testimoni.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM testimonial WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
		$nama = $row['nama'];
	$isi = $row['isi'];
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
        	<a href="../home.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
   

	
	<form name="update_user" method="post" action="edit.php">
		<table border="0" class="table1" width="85%">
			<tr class="th">
			<th width="90">EDIT DATA TESTIMONIAL</th>
		</tr>
	</table>

		<br><br>
		<TABLE border="0">	
			<td><b>Nama	</b><div class="desc"> Masukan Nama</div><div class="desc"> .</div></td>
			<td>:</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr>
				<td><b>Testimonial</b><div class="desc"> Masukan Testimonial</div></td>
			<td>:</td>

				<td><textarea name="isi" cols="40" rows="4" value=<?php echo $isi;?>>
				</textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="book3" name="Update" value="Edit"></td>
			</tr>
		</table>
	</form>


</div>
</div>
</body>
</html>