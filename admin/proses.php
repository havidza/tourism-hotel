<?php
include "../config/koneksi.php";
#jika ditekan tombol login
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysql_query("SELECT * FROM admin WHERE username='$username' AND
password='$password]'");
$num = mysql_num_rows($sql);
if(isset($_POST['Login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("SELECT * FROM admin WHERE username='$username' &&
password='$password'");
$num = mysql_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?>
<script language="JavaScript">alert('Welcome Back Admin');
document.location=('../halaman_admin/home.php')</script>
<?php
} 
else {
// jika login salah //
echo "<script>
eval(\"parent.location='index.html '\");
alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
</script>";
}
}
?>