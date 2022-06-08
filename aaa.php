<?php
	session_start();
	$c = mysqli_connect("127.0.0.1", "root", "", "hack");
	$upd = mysqli_query($c, "UPDATE p SET sost='1' WHERE id='{$_GET['id']}'");
	header('Location: index1.php');
?>