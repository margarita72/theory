<?php 
	//Инициализируем сессию:
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сессии</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>

	 <h4>Задания:</h4>
	 <?php 
	 		
			
			//Пишем в сессию:
			$_SESSION['test'] = 'Тест!';

			//Выведем переменную test из сессии:
			echo $_SESSION['test'];

			/*
		Переменная $_SESSION['counter'] будет нашим счетчиком.
		Если скрипт запускается первый раз -
		она будет пуста, присвоим ей единицу.
		Если не первый раз - тогда прибавим единицу.
	*/
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter'] = $_SESSION['counter'] + 1;
	}

	//Выведем значение счетчика:
	echo '<br> Вы обновили эту страницу '.$_SESSION['counter'].' раз!';

	/*
		Обновите страницу несколько раз,
		посмотрите на то, как увеличивается значение переменной.
		Затем закройте браузер, подождите полчаса и откройте снова -
		убедитесь в том, что переменная обнулилась!
	*/

		//После выполнения этой команды ВСЕ переменные сессии станут null:
		//session_destroy();
	  ?>
</body>
</html>