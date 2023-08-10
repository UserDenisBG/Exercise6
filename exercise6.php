<html>
<head>
	<meta charset="utf-8">.
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Вход</title>
	<form method="post">
		Username: <input type="text" name="name"><br>
	Password: <input type="password" name="pass"><br>
	Continue:<input type="submit" value="Вход" ><br>
	</form>
</head>
<body>

</body>
</html>
<?php
session_start();
echo "Are you ";
echo $_SESSION['name'];
if (isset($_POST['name'])) {
	if (isset($_POST['pass'])) 
	$_SESSION['name'] = $_POST['name'];
	$pass = $_POST['pass'];
	echo"<br>";
	echo "Hello ";
	echo $_SESSION['name'];

}
