<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w =(int) $_POST['pt'];
$date = $_POST['date'];
$discount = (int)$_POST['discount'];
$result = $db->query("SELECT * FROM products WHERE product_id = '".$b."'");
//mysqli_stmt_bind_param(':userid', $b);
//$result->execute();
for($i=0; $row = $result->fetch_array(); $i++){
$asasa= (int)$row['price'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$p=$row['profit'];
}

//edit qty
$sql = "UPDATE products   SET qty=qty-'".$c."'WHERE product_id='".$b."'";
$q = $db->query($sql);
//$q->execute(array($c,$b));
$fffffff = $asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;
// query

$insert = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,profit,product_code,gen_name,date) ";
$value = "VALUES ('".$a."','".$b."','".$c."','".$d."','".$name."','".$asasa."','".$profit."','".$code."','".$gen."','".$date."')";
$q = $db->query("$insert $value");

//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':h'=>$profit,':i'=>$code,':j'=>$gen,':k'=>$date));
header("location: sales.php?id=$w&invoice=$a");


?>