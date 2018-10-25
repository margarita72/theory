<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Конструкторы</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>

	<h4>Задание:  Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.

Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.</h4>

<?php 
	/**
	 * создаю класс по заданию
	 */
	class Worker 
	{
		private $name,$salary,$age;

		function __construct($getName, $getSalary, $getAge)
		{
			$this ->name = $getName;
			$this ->salary = $getSalary;
			$this ->age = $getAge;
		}

		function conclusion(){
			echo "<h3>Заявдлен человек</h3><br>";
			echo "  {$this ->name} <br>";
			echo " {$this ->salary} <br>";
			echo " {$this ->age} <br>";
		}
	}

	$Worker = new Worker( "Дима", 25, 1000);
	$Worker ->conclusion();
 ?>
</body>
</html>