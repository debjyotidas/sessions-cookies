<?php
echo "Welcome to the world of cookies<br>.";
//syntax to set cookie

setcookie("category","books", time() + 86400, "");
echo "the cookie is set.<br>";
?>