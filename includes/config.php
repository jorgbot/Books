<?php
session_start();
//Conexion MySQL
$DBHost = 'localhost';
$DBUser = 'root';
$DBPass = '';
$DB = 'Books';
$r = mysql_connect($DBHost, $DBUser, $DBPass);
if(!$r)
{
	die( mysql_error() );
}

mysql_select_db($DB,$r);
date_default_timezone_set("America/Bogota");

?>