<?php 
session_start(); 
if ($_SESSION['user']==null) {
	header("Location:regvhod.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background: #E5E5E5;">

	<div class="col-12">
		<div class="col-9 mx-auto bg-white pt-5 pb-5">
			<h1 style="font-family: Orbitron; margin-left: 40px;" class="mt-4 mb-4 text-center">Добавление памятника</h1>
			<form action="insert2.php" method="POST" class="col-4 mx-auto mt-4 text-center col-6">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="name" placeholder="Введите название памятника">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="place" placeholder="Введите местоположение">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="kateg" placeholder="Введите категорию">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="vid" placeholder="Введите вид">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="npd" placeholder="Введите НПД о постановке на госохрану">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="reg" placeholder="Регистрационный номер в Реестре">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="karta" placeholder="Введите Яндекс ссылку места на карте">
				<input placeholder="Выбрите фото" class="mt-3" type="file" name="file">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5;" name="text" placeholder="Введите описание памятника">
				<input class="form-control rounded-pill mt-3" style="background: #E5E5E5; display: none;" name="id" value="<?php echo $_SESSION['user'] ?>">
				<button class="btn text-center rounded-pill col-12 mt-3" style="background: rgba(99, 159, 249, 1);">Вперёд</button>
			</form>
		</div>
	</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>