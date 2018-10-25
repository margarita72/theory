<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Метод post</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>

<br><p></p>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
		<fieldset>
		    <legend>Выберите ваш любимый вид спорта</legend>
		      <select name="sport">
		        <option value="Футбол">Футбол</option>
		        <option value="Баскетбол">Баскетбол</option>
		        <option value="Хоккей">Хоккей</option>
		        <option value="Волейбол">Волейбол</option>
		        <option value="Бальные танцы">Бальные танцы</option>
		      </select>
  		</fieldset><br>
  			<input type="submit" value="Отправить">


	</form>
	<h1>Ваш любимый вид спорта - <span style="color:red">
	<?php
    echo isset($_POST['sport']) ? $_POST['sport'] : '';
	?>
</body>
</html>