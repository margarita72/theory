<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Наследование</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>
<h4>Задание: <br>
	<p>Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.</p>
	<p>
	Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.</p>

	<p>Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.</p>
</h4>
	<?php 
		/**
		 * 
		 */
		class User 
		{
			public $name, $age;

			public function setName(){
			echo $this->name="Иван";
			}

			public function getName(){
				$this->age = 25;
			}

			public function setAge(){
				$this->name = "Вася";
			}

			public function getAge(){
				$this->age = 26;
			}
			
			
		}

		/**
		 * этот класс будет наследовать значения класа User
		 */
		class Worker extends User

		{
			private $salary;

			public function getSalary(){
			return $this->salary = 1000;
			}

			public function setSalary(){
				return $this->salary = 2000;
			}
			public function __construct(){
			echo "Сумма двух зарплат этих чуваков равна " .$this->result = $this->getSalary() +
				$this->result = $this->setSalary();

			}
		}
		$itog = new Worker;
		

	 ?>
</body>
</html>