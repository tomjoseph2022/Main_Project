<?php 
 include 'connection.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Touirst Guiding System </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forgotstyle.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="forgotemail.php" method="POST">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your Registered phone and email</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="emas" placeholder="Email Address">
                    </div>
                 
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Reset">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


