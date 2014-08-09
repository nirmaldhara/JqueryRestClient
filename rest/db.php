<?php
$mysql_hostname = "localhost";
$mysql_user = "codewale_bang1";
$mysql_password = "kuhu@1982";
$mysql_database = "codewale_details";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>
