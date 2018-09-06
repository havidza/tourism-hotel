<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="oke.css">
	<link rel="shortcut icon" href="icon/favicon.ico">
	<title>MERLIN HOTEL</title>
</head>
<body>
<!----

KONTEN UNTUK WEBSITE
1. FASILITAS HOTEL
2. CONTACS
3. ROOM AND SUITES
4. RESERVASI
5. TESTIMONIAL


-->


	<div id="header">
		<div id="navigasi">
			<nav>
 				<ul>
 					<li><a href="reservasi.php"> <button class="book">
 					BOOKING 
 				</button>
 			</a></li>
 				<li><a href="facilities.php">FACILITIES</a></li>
 				<li><a href="reservasi.php">RESERVASI</a></li>
 				<li><a href="room.php">ROOMS</a></li>
 				<li><a href="../home.php">HOME</a></li>
 				</ul>

 			</nav>
		</div>
<div id= "icon">
			<a href ="../home.php">MERLIN HOTEL</a>
		</div>
		<div id="icon1">
			<a href="../home.php"><img src="icon/icon.png" height="41px" width="39px"></a>
		</div>
	</div>


<div id="gambar1">
<img src="gambar/health1.jpg" width="100%" height="670px">
</div>




<?php
//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
  
//gunakan database universitas
$result=mysql_query('USE hotel');
                
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM health');
while ($row=mysql_fetch_array($result,MYSQL_ASSOC))

	echo "
	<div id=content1>
		<br><br>
	<div id=content2>
		<h4 class=judul>".$row['judul']."</h4> <img src=gambar/".$row['gambar']." width=550px height=300px class=miring>

			<div class=isi>
		<p align=justify> ".$row['isi']."<p>
		</div><br><br><br><br>
		<hr class= garis>";

		
?>

</div>
<br><br>


<div class="footer1">


			<div class="contact1">
				ABOUT US 
				<hr>
				<p class="about" align="justify">
					The Merlin Phuket Hotels & Resorts offers two resorts and two hotels in Southern Thailand with over 25 years' experience in the hotel and hospitality field.
				</p>
				<p class="about" align="justify">
					Phuket Merlin Hotel was founded in 1980 as the first hotel on jawaraj road in Phuket Town , The Merlin consistently aims to offer the best quality hotel experience with a team of dedicated professional and experienced managers.					
				</p>
				<p class="about" align="justify">
					The Merlin Phuket Hotels & Resorts has built upon Thai culture and traditional Thai hospitality.
				</p>

			</div>



			<div class="contact1">
				CONTACTS
				<hr>
			<p class="about">
				<strong>
					Sales Head Office
				</strong>
				<br class="about">
				158/1 Jawaraj Road, Muang, Phuket 83000 Thailand
				<br class="about">
				Tel: +66-76-212866-70 Fax: +66-76-234930
				<br class="about">
				E-mail: sales@merlinphuket.com
			</p>

			<p class="about">
				<strong>
					Bangkok Sales Office
				</strong>
				<br class="about">
				5/23 Soi Santa Town House, Wireless Road, Pathumwan, Bangkok 10330 Thailand
				<br class="about">
				Tel: +66-2-2532641, 2532536, 6555051
				<br class="about">
				Fax: +66-2-2542669
				<br class="about">
				Email: bkkoffice@merlinphuket.com
			</p>



			</div>
			<div class="contact1">	
				FOLLOW US
				<hr>
				<br class="about">
				<a href ="https://web.facebook.com/merlinresort/?_rdc=1&_rdr"><img src = "gambar/fb.png" height= "45px" width="45px" class="hover"></a>
				<a href="https://twitter.com/MerlinPhuket/"><img src = "gambar/twitter.png" height = "45px" width="45px" class="hover"></a>
				<a href="https://www.instagram.com/explore/locations/1646721/"><img src = "gambar/instagram1.png" height = "45px" width="45px" class="hover"></a>
				<a href="https://www.pinterest.com/merlinphuket/"><img src = "gambar/path.png" height = "45px" width="45px" class="hover"></a>

			<div class="award">
				<br><br><br><br>
				AWARD
				<hr>
				 <img src="gambar/ta.png" width="90px" height="60px">
				 <img src="gambar/spa.jpg" width="90px" height="60px">
				 <img src="gambar/asean.jpg" width="90px" height="60px">
				 	</div>
			
			</div>
	
</div>


<div id="footer2">
				<br> Havid Zaeni Al Muttaqien | XI RPL B | All Rights Reserved.
			</div>





</body>
</html>