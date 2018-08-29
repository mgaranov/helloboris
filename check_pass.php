<?php
include "auth.php"; //Подключаем БД

$temp_user_name=strval($_REQUEST['username']);
$temp_user_password=strval($_REQUEST['password']);

$query = "select * from auth_test where id='0'";
$result = mysql_query($query) or die(mysql_error());

while ($row=mysql_fetch_array($result)){

	$user_name=$row['username'];
	$user_password=$row['password'];
	


}

if ((strval(($temp_user_name)==strval($user_name)) and (strval($temp_user_password)==strval($user_password)))){
	print "true";
} else print "false";

?>