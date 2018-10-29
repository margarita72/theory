<?php 
		setcookie("test", "123", time() + 60);
		if (SetCookie("test", "123",time() + 60)) echo "<h3>Cookies успешно установлены!</h3>";
		else echo "<h3>Cookie установить не удалось!</h3>";
		echo $_COOKIE['test'];
	//echo "cookie установлены";

		
 ?>