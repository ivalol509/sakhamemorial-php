<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SakhaMemorial</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
	</style>
</head>
<body>
		<div class="mx-auto bg-white" style="width: 100%">
			<div class="row">
				<div class="col-6 text-center d-flex" style="margin-left: 25vh;">
					<img src="logo.png" style="height: 60px; width: 60px; margin-left: 9px; margin-top: 20px;">
					<h1 style="font-family: Orbitron; margin-left: 1vh; margin-right: 30vh;" class="mt-4 mb-4">SakhaMemorial</h1>
					<div style="display: flex;">
						<a href="insert.php" style="text-decoration: none; display: flex; width: 22vh;">
							<img src="icon/plus.png" style="height: 5vh; margin-top: 5.6vh; width: 5vh;">
							<h5 style="color: black; margin-top: 3.9vh; margin-left: 1.5vh;">Добавить памятник</h5>
						</a>
						<a href="poisk.php" style="text-decoration: none; display: flex; width: 16vh; margin-left: 7vh;">
							<img src="icon/poisk.png" style="height: 5vh; margin-top: 5.6vh; width: 5vh;">
							<h5 style="color: black; margin-top: 5.8vh; margin-left: 1.5vh;">Поиск</h5>
						</a>
						
						<?php 
							if ($_SESSION['user']==null) {
						?>
						<a href="regvhod.html" style="text-decoration: none; display: flex; width: 22vh; margin-left: 7vh;">
							<img src="icon/vhod.png" style="height: 5vh; margin-top: 5.6vh; width: 5vh;">
							<h5 style="color: black; margin-top: 3.9vh; margin-left: 1.5vh;">Вход/регистрация</h5>
						</a>
						<?php
							}else{
						?>
						<a href="mystr.php" style="text-decoration: none; display: flex; width: 22vh; margin-left: 7vh;">
							<img src="icon/dom.png" style="height: 6vh; margin-top: 5.3vh; width: 6vh;">
							<h5 style="color: black; margin-top: 3.9vh; margin-left: 1.5vh;">Моя страница</h5>
						</a>
						<?php
							}
						 ?>
					</div>
				</div>
				<?php 
					$c = mysqli_connect("127.0.0.1", "root", "", "hack");
					$q = mysqli_query($c, "SELECT * FROM p WHERE sost=0");
					for ($i=0; $i < mysqli_num_rows($q); $i++) { 
						$s = $q->fetch_assoc();
				 ?>
				 	<a href="pamyatnik.php?id=<?php echo $s['id'] ?>" style="text-decoration: none;">
				 		<div class="col-12 border pt-4 pb-3 lol1 d-flex" style="justify-content: center;">
					 		<p style="transition: 0.5s; font-size: 29px; color: black; font-family: Orbitron;" class="lol2"><?php echo $i + 1 ?>.</p>
					 		<p style="transition: 0.5s; font-size: 29px; color: black; margin-left: 1vh;" class="lol3"> <?php echo $s["name"] ?></p>
					 	</div>
				 	</a>
				<?php } ?>
				<a href="" style="text-decoration: none; color: black;">
					<div class="col-12 text-center d-flex border">
						<h1 style="font-family: Orbitron; margin-left: 190px;" class="mt-4">QwerTeam</h1>
						<h1 style="font-family: Orbitron; margin-left: auto; margin-top: 70px; margin-right: 190px;">2021</h1>
					</div>
				</a>
			</div>
		</div>


	<script type="text/javascript">
        let bsk = document.querySelectorAll('.lol1');
        let bsk_box = document.querySelectorAll('.lol2');
        let bsk_box2 = document.querySelectorAll('.lol3');

        for (let i = 0; i < <?php echo mysqli_num_rows($q) ?>; i++) {
	        bsk[i].onmouseover = function() {
				bsk_box[i].style.fontSize = 35 + "px";
				bsk_box2[i].style.fontSize = 35 + "px";
			};
			bsk[i].onmouseout = function() {
				bsk_box[i].style.fontSize = 29 + "px";
				bsk_box2[i].style.fontSize = 29 + "px";
			};
        }
    </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>