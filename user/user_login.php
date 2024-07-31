<?php
session_start();
include('connexion.php');

if (isset($_POST['adminLogin'])) {
    $query = "SELECT email, password, name FROM admin WHERE email= '$_POST[email]' AND password='$_POST[password]' ";
    $query_run = mysqli_query($connexion, $query);
    if (mysqli_num_rows($query_run)) {
        while ($row = mysqli_fetch_assoc($query_run)) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
        }
        echo "<script type='text/javascript'>
        window.location.href = 'user_dashboard.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Please enter correct details');
        window.location.href = 'login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TaskMaster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login to TaskMaster</h2>
            <form id="loginForm" method="POST" action="login.php">
                <div class="form-group">
                    <label for="loginEmail">Email address</label>
                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <button type="submit" name="adminLogin" class="btn btn-primary btn-block">Log In</button>
            </form>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
