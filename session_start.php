<?php

// start a session
session_start();

// set a session variable
$_SESSION["username"] = "Debjyoti";
$_SESSION["favlang"] = "Javascript";
echo "Session is saved .<br>";

?>
<html>
<body>

<!-- <a href="sessions.php">Sessions page</a> -->

</body>
</html>