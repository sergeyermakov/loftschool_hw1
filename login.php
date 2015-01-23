<?php 
include 'header.php';
//
// Авторизация.
//
function login($login){
// Имя не должно быть пустой строкой.
	if ($login == ""){
	return false;
	}	
// Запоминаем имя в
$_SESSION["login"]=$login;
// и в cookies, если пользователь пожелал запомнить его (на неделю).
if ($remember){
setcookie("login");
// Успешная авторизация.
return true;
}
//
// Сброс авторизации.
//
function logout(){
// Делаем cookies
setcookie("login");
// Сброс сессии.
unset($_SESSION["login"]);
}
//
// Точка входа.
//
session_start();
$enter_site = false;
// Попадая на страницу login.php, авторизация сбрасывается.
logout();
// Если массив POST не пуст, значит, обрабатываем отправку формы.
if (count($_POST) > 0){
$enter_site = login($_POST["login"]);
}
// Переадресуем авторизованного пользователя на одну из страниц сайта.
if ($enter_site){
header("Location: portfolio.php");
exit();
}

?>

<div class="contact-form auth">
                    <div class="contact-head">
                        Авторизуйтесь
                    </div>
                    <div class="contact-body clearfix">
<form action="" method="POST">
	<div class="input-label left">	
	<label for="login">Логин</label>
	<input type='text' name='login' id="login" class="text-input" placeholder="Введите логин">
	</div>

	<div class="input-label left">
	<label for="pass">Пароль</label>
	<input type='password' name='pass' id="pass" class="text-input" placeholder="Введите пароль">
	</div>


	<input type="submit" class="btn submit">


</form>
</div>

                </div>
</div>
<?php
include 'footer.php';
?>