<?php
// Start session
session_start();

// Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - EREC's Pharmacy</title>
    
    <!-- Bootstrap CSS via CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

	<style>
    body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: #008080;
		background-image: url("main/img/LoginBack.jpg"); 
		background-color: #008080;
		background-size: 1950px 1000px;

	 }
    #login {

        width: 40%;
        margin: auto;
        background-color: #595853;
        border-radius: 50px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
		filter: blur(0.5px);
		opacity: 0.8;
		padding: 100px 0;
		justify-content: center;
		
		
    }
    .login-header {
        font-size: 30px;
        color: white;
        margin-bottom: 20px;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
		display: flex;
        justify-content: center;
		
    }
    .form-control {
		border-radius: 10px;
        margin-bottom: 20px;
        height: 60px;
        font-size: 18px;
        width: 90%;
        border-color: #ced4da;
        box-shadow: none;
		justify-content: center;
        padding-right: 40px; /* Adjust padding to leave space for icon */
    }
    .input-group {
        position: relative;
		justify-content: center;
		right: -10px;
    }
    .input-group-text {
        position: absolute;
        right: 100px;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        color: #0d6efd;
        font-size: 20px;
    }
    .btn {
        padding: 15px;
        font-size: 18px;
    }
    .d-grid {
        display: flex;
        justify-content: center;
    }
    .btn-primary {
        width: 50%;
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .alert {
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <div id="login">
        <?php
        if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
            foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<div class="alert alert-danger text-center">', $msg, '</div>';
            }
            unset($_SESSION['ERRMSG_ARR']);
        }
        ?>
        
        <form action="login.php" method="post">
            <div class="text-center">
                <h2 class="login-header">Pharmacys System</h2>
            </div>

            <!-- Username field -->
            <div class="mb-3 input-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <span class="input-group-text"><i class="bi bi-person"></i></span>
            </div>

            <!-- Password field -->
            <div class="mb-3 input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
            </div>

            <!-- Login button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies via CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html