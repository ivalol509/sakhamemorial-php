<?php 
	session_start();

	$folder = 'img/';
	$file_upload = $folder . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $file_upload );

	$c = mysqli_connect("127.0.0.1", "root", "", "hack");
	$q = mysqli_query($c, "SELECT * FROM p");

	$ins = "INSERT INTO p (name, place, kateg, vid, npd, reg, text, img, karta, author) VALUES ('{$_POST['name']}', '{$_POST['place']}', '{$_POST['kateg']}', '{$_POST['vid']}', '{$_POST['npd']}', '{$_POST['reg']}', '{$_POST['text']}', '{$file_upload}', '{$_POST['karta']}', '{$_POST['id']}')";
	$q1 = mysqli_query($c, $ins);

	if ($q1 == true) {
		header("Location: index1.php");
	}
?>