<?php
session_start();
include('../connect.php');

$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];

if($d == 'credit') {
    $f = $_POST['due'];
    $sql = "INSERT INTO sales (invoice_number, cashier, date, type, amount, profit, due_date, name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ssssddss", $a, $b, $c, $d, $e, $z, $f, $cname);
    $stmt->execute();
    
    header("location: preview.php?invoice=$a");
    exit();
}

if($d == 'cash') {
    $f = $_POST['cash'];
    $sql = "INSERT INTO sales (invoice_number, cashier, date, type, amount, profit, due_date, name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ssssddss", $a, $b, $c, $d, $e, $z, $f, $cname);
    $stmt->execute();
    
    header("location: preview.php?invoice=$a");
    exit();
}
?>
<html>
<head>
<title>Sales Operation</title>

<!-- Include your necessary CSS and JS files -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Add your custom styling -->
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  .sidebar-nav {
    padding: 9px 0;
  }
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

<!-- Print functionality -->
<script type="text/javascript">
function printPage() {
    window.print();
}
</script>

</head>
<body>

<!-- Navigation and Sidebar -->
<?php include('navfixed.php'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
          <li class="active"><a href="sales.php"><i class="icon-shopping-cart icon-2x"></i> Sales</a></li>
          <li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a></li>
          <li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a></li>
          <li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->

    <div class="span10">
      <div class="contentheader">
        <i class="icon-table"></i> Sales Operation
      </div>
      <ul class="breadcrumb">
        <li><a href="index.php">Dashboard</a></li> /
        <li class="active">Sales Operation</li>
      </ul>

      <!-- Print Button -->
      <button onclick="printPage()" class="btn btn-primary btn-large" style="float: right; margin-bottom: 20px;"><i class="icon-print icon-large"></i> Print</button>

      <!-- Sales Table -->
      <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
        <thead>
          <tr>
            <th width="12%"> Invoice Number </th>
            <th width="14%"> Product </th>
            <th width="13%"> Qty </th>
            <th width="10%"> Amount </th>
            <th width="10%"> Date </th>
            <th width="10%"> Type </th>
            <th width="10%"> Price </th>
            <th width="8%"> Action </th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('../connect.php');
          $result = $db->query("SELECT * FROM sales_order ORDER BY date DESC");

          while ($row = $result->fetch_assoc()) {
            echo '<tr class="record">';
            echo '<td>'.$row['invoice'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['qty'].'</td>';
            echo '<td>'.$row['amount'].'</td>';
            echo '<td>'.$row['date'].'</td>';
            echo '<td>'.$row['gen_name'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td><a href="edit_sale.php? " class="btn btn-warning"><i class="icon-edit"></i> Edit</a></td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="js/jquery.js"></script>
</body>
</html>