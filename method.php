<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Метод</title>
</head>
<body>
	<?php 
		require "menu.php";
	 ?>


	<h1>Методы и объекты</h1>
	<h2>Задание: Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).

Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. </h2>

<?php 
	/**
	 * создаю класс Worker
	 */
	class Worker 
	{
		public $name;
		public $age;
		public $salary;
		
	}
		$objektName = new Worker();
		$objektName -> name = "Иван";
		$objektName -> age = 25;
		$objektName -> salary = 2000;
		$objektName2 = new Worker();
		$objektName2 -> name = "Вася";
		$objektName2 -> age = 26;
		$objektName2 -> salary = 2000;
		echo $objektName ->salary + $objektName2-> salary;


 ?>

	 <h2>Задание 2: Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.

	Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

	Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. </h2>

	<?php 
		/**
		 * Создание второго класса
		 */
		class Worker2
		{
			
			private $name;
			private $age;
			private $salary;

			public function setName (){
				$this -> name = "Иван";
				//echo $this ->name;
			}

			public function getName (){
				$this -> name = "Вася";
			}

			public function setAge(){
				$this -> age = 25;
			}

			public function getAge(){
				return $this -> age = 120;

			}

			public function setSalary(){
				return $this -> salary = 1000;
				
				

			}

			public function getSalary(){
				return $this -> salary = 2000;
				
			}
			public function checkAge(){
				echo "Здесь проверяется возраст из метода getAge"."<br>";

				//return $this-> salary = $this->getAge();
				if ($this->result = $this->getAge()>100) {
					echo "Вот это долгожитель" ."<br>";
					
				}

					elseif ($this->result = $this->getAge() < 1) {

						echo "Человек еще не родился";
						
					}
				else{
					echo "Все ок";
				}
			}

		}

			

		$EktName = new Worker2;
		$EktName -> setSalary();
		$EktName2 = new Worker2;
		$EktName2 -> getSalary();
		echo  $EktName ->setSalary() + $EktName2 -> getSalary();
		


		

	 ?>

	 <h2>Задание 3: Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться)</h2>
	 <?php 
	 	$EktName3 = new Worker2;
		$EktName3 -> checkAge();
	  ?>
</body>
</html>