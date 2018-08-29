<?PHP  header("Content-Type: text/html; ");
?>
<? include "auth.php";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>

<head>
	<TITLE>test</TITLE>
	<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

</head>



<body>

	<div style="text-align: center; position: relative; top: 10px;">
		<div class="first">
		<div style="text-align: center; position: relative; top: 10px;display: inline-block;">логин:</div>
		<input class="login" style="position: relative;top: 10px;width: 100px;display: inline-block;" size="50" type="text">
		</div>
		<div class="second">
		<div style="text-align: center; position: relative; top: 10px;display: inline-block;">пароль:</div>
		<input class="password" style="position: relative;top: 10px;width: 100px;display: inline-block;left: -4px;" class="user_name" size="50" type="text">
		</div>
		<div class="button" style="position: relative;top: 15px;border: solid 1px;display: inline-block;cursor: pointer;background-color: gold;color: navy;">кнопка</div>
		<div class="return"></div>
	</div>
</body>
</html>