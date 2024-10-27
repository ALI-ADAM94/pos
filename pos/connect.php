<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'sales'; 

/* End config */
$db = new mysqli($db_host,$db_user,$db_pass,$db_database);
/*
$db=new PDO("mysql:host=$db_host;dbname=$db_database",$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db= mysqli_connect($db_host,$db_database,$db_user,$db_pass);
//$db = new PDO("mysql:host=".$db_host.';"dbname="'.$db_database, $db_user, $db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
?>