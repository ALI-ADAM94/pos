<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - EREC's Pharmacy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            padding-top: 60px;
        }

        /* Main content */
        .main-content {
            padding: 20px;
        }

        /* Footer styles */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Point of Sales</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <!-- الروابط الجديدة المضافة للنافبار -->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-house"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="bi bi-cart"></i> Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php"><i class="bi bi-box-seam"></i> Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer.php"><i class="bi bi-people"></i> Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supplier.php"><i class="bi bi-people"></i> Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salesreport.php?d1=0&d2=0"><i class="bi bi-file-earmark-text"></i> Sales Report</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Welcome: <strong><?php echo $_SESSION['SESS_LAST_NAME']; ?></strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-calendar3"></i>
            <?php
              $Today = date('y:m:d');
              $new = date('l, F d, Y', strtotime($Today));
              echo $new;
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="../index.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="main-content">
    <h1>Welcome to the POS System</h1>
    <!-- Your main content goes here -->
</div>

<!-- Footer -->
<footer>
    <strong>Time: </strong><span id="clock" style="font-size: 18px;"></span>
</footer>

<!-- JavaScript to update the clock -->
<script>
  function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Add leading zeros to minutes and seconds if needed
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    var timeString = hours + ":" + minutes + ":" + seconds;

    document.getElementById('clock').textContent = timeString;
  }

  // Update the clock every second
  setInterval(updateClock, 1000);
  // Initial call to display the clock immediately
  updateClock();
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
