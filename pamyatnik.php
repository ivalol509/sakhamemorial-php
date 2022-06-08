<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SakhaMemorial</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

	<?php 
		$c = mysqli_connect("127.0.0.1", "root", "", "hack");
		$q = mysqli_query($c, "SELECT * FROM p WHERE id = '{$_GET['id']}'");
		$s = $q->fetch_assoc();
	 ?>

	<div class="col-12" style="">
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
			<div class="col-12 border" style="padding-bottom: 55px;">
				<p style="transition: 0.5s; font-size: 29px; color: black; margin-left: 15vh; font-family: Orbitron;" class="lol2"><?php echo $s["name"] ?></p>
				<div class="d-flex col-10 mx-auto">
					<div class="col-3 mx-auto">
						<img class="col-12 img" src="img/<?php echo $s["img"] ?>" >
					</div>
					<div class="col-7 mx-auto">
						<iframe src="<?php echo $s["karta"] ?>&amp;source=constructor" class="col-12 if" height="350" frameborder="0"></iframe>
					</div>
				</div>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Категория:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["kateg"] ?></p>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Вид памятника:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["vid"] ?></p>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Описание:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["text"] ?></p>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Местонахождение:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["place"] ?></p>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">НПД о постановке на госохрану:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["npd"] ?></p>

				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Регистрационный номер в Реестре:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s["reg"] ?></p>

				<?php
					$q2 = mysqli_query($c, "SELECT * FROM author WHERE id = '{$s['author']}'");
					$s2 = $q2->fetch_assoc();
				?>
				<p style="font-size: 29px; color: black; margin-left: 55px; font-family: Orbitron; margin-top: 30px;" class="lol2">Автор:</p>
				<p style="font-size: 20px; color: black; margin-left: 55px;" class="lol2"><?php echo $s2["name"] ?></p>

				<a href="aaa.php?id=<?php echo $s["id"] ?>" style="color: red; margin-left: 55px; text-decoration: underline;" class="rer">Пожаловаться</a>
			</div>
			<div class="col-12 text-center d-flex border">
				<h1 style="font-family: Orbitron; margin-left: 40px;" class="mt-4">QwerTeam</h1>
				<h1 style="font-family: Orbitron; margin-left: auto; margin-top: 70px; margin-right: 40px;">2021</h1>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>