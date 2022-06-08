<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Poisk</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="text-align: center;">
	<a href="index1.php" style="color: black; text-decoration: none;"><h1 style="font-family: orbitron; font-size: 8vh; margin-top: 5vh;">SAKHAMEMORIAL</h1></a>
	<form action="poisk.php" method="POST" class="mx-auto mt-4 appr1 text-center col-6" style="display: flex; ">
		<input class="form-control rounded-pill" style="background: #E5E5E5;" name="name" placeholder="Введите название памятника">
		<button class="btn text-center rounded-pill col-2" style="background: rgba(99, 159, 249, 1); font-family: Orbitron; margin-left: 1vh;">Поиск</button>
	</form>

	<?php 
		$c = mysqli_connect("127.0.0.1", "root", "", "hack");
		$q = mysqli_query($c, "SELECT * FROM p WHERE name='{$_POST['name']}'");
		$num = mysqli_num_rows($q);
		if ($num==null) {

		}
		elseif($num==0){
			?>
				<p style="color: red;">К сожалению, по вашему запросу ничего не было найдено</p>
			<?php
		}
		else{
		?><div style="width: 100%; height: 5vh;"></div><?php
		for ($i=0; $i < mysqli_num_rows($q); $i++) { 
			$s = $q->fetch_assoc();
	 ?>
	 	<a href="pamyatnik.php?id=<?php echo $s['id'] ?>" style="text-decoration: none;">
	 		<div class="col-12 border pt-4 pb-3 lol1 d-flex" style="justify-content: center;">
		 		<p style="transition: 0.5s; font-size: 29px; color: black; margin-left: 1vh;" class="lol3"> <?php echo $s["name"] ?></p>
		 	</div>
	 	</a>
	<?php }} ?>

</body>
</html>