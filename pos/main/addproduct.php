<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    
    <!-- Inline CSS for custom styling -->
    <style>
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-submit {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="saveproduct.php" method="post" class="p-4 border rounded shadow-sm bg-light">
        <h4 class="form-header"><i class="bi bi-plus-circle-fill"></i> Add Product</h4>
        
        <div class="mb-3">
            <label class="form-label">Brand Name:</label>
            <input type="text" class="form-control" name="code">
        </div>

        <div class="mb-3">
            <label class="form-label">Generic Name:</label>
            <input type="text" class="form-control" name="gen" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category / Description:</label>
            <textarea class="form-control" name="name" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Date Arrival:</label>
            <input type="date" class="form-control" name="date_arrival">
        </div>

        <div class="mb-3">
            <label class="form-label">Expiry Date:</label>
            <input type="date" class="form-control" name="exdate" value="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Selling Price:</label>
            <input type="text" class="form-control" id="txt1" name="price" onkeyup="sum();" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Original Price:</label>
            <input type="text" class="form-control" id="txt2" name="o_price" onkeyup="sum();" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Profit:</label>
            <input type="text" class="form-control" id="txt3" name="profit" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Supplier:</label>
            <select name="supplier" class="form-select">
                <option value="">Select Supplier</option>
                <?php
                    include '../connect.php';
                    $result = $db->query('SELECT * FROM supliers');
                    while ($row = $result->fetch_array()) {
                        echo "<option>" . $row['suplier_name'] . "</option>";
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity:</label>
            <input type="number" class="form-control" min="0" id="txt11" name="qty" onkeyup="sum();" required>
        </div>

        <input type="hidden" id="txt22" name="qty_sold" value="0">
        
        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-submit"><i class="bi bi-save-fill"></i> Save</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>