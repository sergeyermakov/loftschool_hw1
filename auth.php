<?php

if ($_POST['login'] == 'admin' && $_POST['pass'] == 'password') {

$_SESSION['auth'] = '1';

print_r('Вы авторизовались') ;
}

if (isset($_SESSION['auth'])) echo 'вы авторизованы';

?>
