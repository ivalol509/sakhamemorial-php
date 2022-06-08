<?php 
	session_start();
	
	$c = mysqli_connect("127.0.0.1", "root", "", "hack");
	$q = mysqli_query($c, "SELECT * FROM author");

	$ins = "INSERT INTO author (name, password) VALUES ('{$_POST['name']}', '{$_POST['pass']}')";
	$q1 = mysqli_query($c, $ins);

	if ($q1 == true) {
		header("Location: ../mystr.php?lol=1");
	}
?>