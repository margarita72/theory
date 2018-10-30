<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Регистрация</title>
</head>
<body>
		<?php 
		            require "menu.php";
		 ?>
<form action="connection.php" method="POST" />
    <table>
        <tr>
            <td>Введите логин:</td>
            <td><input type="text" size="20" name="login" value="<?php echo @$data['login']; ?>"/></td>
        </tr>
        <tr>
            <td>Введите почту:</td>
            <td><input type="text" size="20" name="email" value="<?php echo @$data['email']; ?>"/></td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td><input type="password" size="20" maxlength="20" name="password" value="<?php echo @$data['password']; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2"><input class="button" type="submit" value="Зарегистрироваться" name="submit" /></td>
        </tr>
    </table>
</form>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'test') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = 'Вы не ввели Логин';
    }          
    elseif (empty($_POST['email'])) 
    {
        $info_reg = 'Вы не ввели почту';
    }           
    elseif (empty($_POST['password'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }                      
    else 
    {
        $login = $_POST['login'];
        $email = $_POST['email'];               
        $password = $_POST['password'];
  
        $query = "INSERT INTO `authorization` (login, email, password)
        VALUES ('$login', '$email', '$password')";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    
        $info_reg = 'Вы успешно зарегистрировались!';
    }
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>

</body>
</html>