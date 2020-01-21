<?php
switch($_GET['code'])
{
case '404':header('Location: https://qwanturank.life/404.php');
break;
default:header('Location: https://qwanturank.life/');
}
?>