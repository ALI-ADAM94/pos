<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
    <form action="savecustomer.php" method="post" class="p-4 border rounded shadow-sm bg-light">
        <h4 class="form-header"><i class="bi bi-plus-circle-fill"></i> Add Customer</h4>
        <hr>
        
        <div class="mb-3">
            <label class="form-label">Full Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>

        <div class="mb-3">
            <label class="form-label">Contact:</label>
            <input type="text" class="form-control" name="contact" placeholder="Contact">
        </div>

        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <textarea class="form-control" name="prod_name" rows="2" placeholder="Product Name"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Total:</label>
            <input type="text" class="form-control" name="memno" placeholder="Total">
        </div>

        <div class="mb-3">
            <label class="form-label">Note:</label>
            <textarea class="form-control" name="note" rows="2" placeholder="Additional Notes"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Expected Date:</label>
            <input type="date" class="form-control" name="date">
        </div>
        
        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-submit"><i class="bi bi-save-fill"></i> Save</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>