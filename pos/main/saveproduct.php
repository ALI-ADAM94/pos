<?php
session_start();
include'../connect.php';
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['exdate'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $_POST['profit'];
$i = $_POST['gen'];
$j = $_POST['date_arrival'];
$k = $_POST['qty_sold'];
// query
$insert="INSERT INTO products (product_code,product_name,expiry_date,price,supplier,qty,o_price,profit,gen_name,date_arrival,qty_sold)";
$value="VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."')";
 $q=$db->query("$insert $value");

header("location: products.php");


?>