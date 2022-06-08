<?php
session_start();

$c = mysqli_connect("127.0.0.1", "root", "", "hack");
$q = mysqli_query($c, "SELECT * FROM author WHERE name='{$_POST['name']}' AND password='{$_POST['pass']}'");

$num = mysqli_num_rows($q);

if ($num == 0) {
    header("Location: ../regvhod.html");
}
else{
	$s=$q->fetch_assoc();
    $_SESSION['user'] = $s['id'];
    header('location: ../mystr.php' );
}
?>