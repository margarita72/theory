<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Практика</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>

	<h1>Типы данных</h1>
	<h2>Задача 1:Даны два числа. Найдите сумму их квадратов.</h2>
	<?php 
		$x=5;
		$y=1;
		$z=35;
		echo "Cумма двух чисел равна ".$sum=$x+$y."<br>"."А их произведение равно ".$work=$x*$y;
	 ?>
	 <h2>Задача 2:Даны три числа x,y и z. Найдите (x+1)4−2(z−2x2+y2)+√siny</h2>
	 <?php 
	 	if ($sum==true and $work==true) {

	 		$answer=($x+1)*4-2*($z-2*pow($x, 2)+pow($y,2))+sqrt(sin($y));
	 		echo $answer;
	 	}

	  ?>
	  <h2>Задача 3:Дано трехзначное числа. Поменяйте среднюю цифру на ноль</h2>
	  <?php 
		$d=458;
		echo "Пока число равно ".$d." меняю среднюю цифру <br>";
		$d=(string)$d;
		$d[1]=9;
		echo "Теперь оно равно ".$d ;

	   ?>
	   <h1>Условный оператор</h1>
			<h2>Задание1: Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30</h2>
				<?php 
				$l=5;
					if ($l>10)
						{
						$l=$l+100;
						echo "Число равно ".$l;
						}
						else 
						{
							$l=$l-30;
							echo "Чисто равно ".$l;

						}


				?>
		<h2>Задание2 :Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.</h2>
		<?php 
			$c=58;
			$f=8;
			if ($c-$f<=20) {
				echo "да";
			}
			else echo "нет";
			

		?>
			
		<h1>Работа с формой</h1>
		<h2>Задание: Пользователь вводит номер дня недели. Вывести название дня недели</h2>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
			<p>Выберете любой номер дня недели</p>
			<p><input type="number" name="numer" min="1" max="7"></p> <br>
			<input type="submit" value="отправить"><br>

		</form>
 			<p>Вы выбрали день недели: 
				<?php 
					$per= isset($_POST['numer']) ? $_POST['numer']:'';
					$day = array('1' => 'Понедельник', '2' => 'Вторник', '3'=>'Среда', '4'=>'Четверг', '5'=>'Пятница', '6'=>'Суббота', '7'=>'Воскресенье' );
					echo $day[$per];
				 ?>
 			</p>
					
				
</body>
</html>