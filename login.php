<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysql_query("select * from user where username='$username' and password='$password'");
$data=mysql_fetch_object($sql);
if ($data) { 
	# code...
	$_SESSION['username']=$username;
	if ($data->level==0) {
		echo "<script> 
			alert('Anda Berhasil login sebagai User');
			window.location.assign('admpusatpage1.php');
			</script>";
	}
	elseif ($data->level==1) {
		# code...
		echo "<script> 
			alert('Anda Berhasil login sebagai Admin');
			window.location.assign('admpage1.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Anda belum terdaftar');
		window.location.assign('login.html');
	</script>";
}?>