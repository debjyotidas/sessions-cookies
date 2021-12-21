<?php

// start a session
session_start();
if(isset($_SESSION['username'])){
	// set a session variable
echo "Welcome ".$_SESSION["username"] ;
echo "<br> Your favourite language is ".$_SESSION["favlang"];
echo "<br>";
}
else{
	echo "Please login to continue";
}

?>
<html>
<body>

<!-- <a href="sessions.php">Sessions page</a> -->

</body>
</html>