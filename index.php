<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма Регистрации</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="coteiner mt-4">
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="row">
			<div class="col">
				<h1>Форма Регистрации</h1>
				<form action="validation-form/check.php" method="post">
					<input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
					<input type="text" class="from-control" name="name" id="name" placeholder="Введите имя"><br>
					<input type="text" class="from-control" name="pass" id="pass" placeholder="Введите пароль"><br>
					<button class="btn btn-success" type="submit">Зарегестрироваться</button>
				</form>
			</div>
			<div class="col">
				<h1>Форма авторизации</h1>
				<form action="validation-form/auth.php" method="post">
					<input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
					<input type="text" class="from-control" name="pass" id="pass" placeholder="Введите пароль"><br>
					<button class="btn btn-success" type="submit">Авторизоваться</button>
				</form>
			</div>
		<?php else: ?>
			<p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation-form/exit.php">здесь</a>.</p>
		<?php endif;?>	
		</div>
	</div>
</body>
</html>