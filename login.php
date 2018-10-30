<?php
session_start();
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Вход на сайт</title>
</head>
<body>
    <?php 
            require "menu.php";
    ?>
<form action="login.php" method="POST" />
    <table>
    	<br>
        <tr>
            <td>Введите логин:</td>
            <td><input type="text" name="login" value="<?php echo @$data['login']; ?>"/></td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td><input type="password" name="password" value="<?php echo @$data['password']; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2"><input class="button" type="submit" value="Войти" name="submit" /></td> 
        </tr>
    </table>
</form>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'test') or die(mysqli_error());

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_input = 'Вы не ввели логин';
    }
    elseif (empty($_POST['password'])) 
    {
        $info_input = 'Вы не ввели пароль';
    }
    else 
    {    
        $login = $_POST['login'];
        $password = $_POST['password'];            
        $user = mysqli_query($connection, "SELECT `id` FROM `authorization` WHERE `login` = '$login' AND `password` = '$password'");
        $id_user = mysqli_fetch_array($user);
                
        if (empty($id_user['id'])) 
        {
            $info_input = 'Введенные данные не верны';
        }
        else 
        {
            $_SESSION['password'] = $password; 
            $_SESSION['login'] = $login; 
            $_SESSION['id'] = $id_user['id']; 

            $info_input = 'Вы успешно вошли в систему';         
        }     
    }
}
        
$info_input = isset($info_input) ? $info_input : NULL;
echo $info_input;
?>

</body>
</html>