<?php
    include('connexion.php');
    if(isset($_POST['userRegistration'])){
        $query = "insert into users values(null, '$_POST[name]', '$_POST[email]' , '$_POST[password]', '$_POST[mobile]')";
        $query_run = mysqli_query($connexion, $query);
        if($query_run){
            echo "<script type='text/javascript'>;
            alert('User registered successfully ...');
            window.location.href = '../index.php' ;
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>;
            alert('Error...Plz try again');
            window.locattion.href = '../index.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | TaskMaster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign Up for TaskMaster</h2>
            <form id="signupForm" method="POST" action="signup.php">
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" class="form-control" id="signupName" name="name" placeholder="Enter your name" required>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email address</label>
                    <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <button type="submit" name="signup" class="btn btn-success btn-block">Sign Up</button>
            </form>
            <div class="text-center mt-3">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
