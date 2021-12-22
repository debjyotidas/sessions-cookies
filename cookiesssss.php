
<?php
echo "Welcome to the world of cookies<br>.";
//syntax to set cookie
$cookie_name = "user";
$cookie_value = "Debjyoti";
setcookie($cookie_name,$cookie_value, time() + (86400), "/");
echo "the cookie is set.<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	if (!isset($_COOKIE[$cookie_name])){
		echo "Plz set the cookie";
	}
	else{
	    echo "My name is :". $_COOKIE[$cookie_name];
	}
	
	?>
</body>
</html>