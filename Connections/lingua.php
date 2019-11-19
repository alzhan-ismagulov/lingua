<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_lingua = "localhost";
$database_lingua = "lingua";
$username_lingua = "root";
$password_lingua = "";
$lingua = mysql_pconnect($hostname_lingua, $username_lingua, $password_lingua) or trigger_error(mysql_error(),E_USER_ERROR); 
?>