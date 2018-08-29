<?
$link = mysql_connect('urkomzak.mysql.ukraine.com.ua', 'urkomzak_test', '******');
mysql_query('SET NAMES utf8');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}

mysql_select_db("urkomzak_test") or die(mysql_error());
?>