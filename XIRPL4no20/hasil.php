<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Berhasil</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="#f1f1f1">
<div id="container">
	<div class="header">
		Instagram
	</div>
	<div class="subheader">Selamat Pendaftaran Anda Berhasil</div>
	<div class="php">
		<table>
		<?php
		$email=$_POST['email'];
		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password = str_repeat("*", strlen($password));
		echo "	<center><tr> <td>Email</td> <td>:</td> <td>$email</td> </tr </center>";
		echo "	<center><tr> <td>Nama Lengkap</td> <td>:</td> <td>$fullname</td> </tr></center>";
		echo "	<center><tr> <td>Username</td> <td>:</td> <td>$username </tr></center>";
		echo "	<center><tr> <td>Password</td> <td>:</td> <td>$password<td></tr></center>";
		?>
		</table>
	</div>
</div>
</body>
</html>