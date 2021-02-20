<?php session_start();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Namaste Therapy</title>
    <link rel="stylesheet" href="../css/therapy.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat&family=Montserrat+Alternates&family=Nunito&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="header-div">
    <h1>Namaste Therapy</h1>
    </div>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Register with Namaste Therapy</h2>


<form method="post" action="#">

                
<label for="first_name">First name:</label><br>
<input type="text" name="first_name" id="first_name" <?php if(isset($first_name)){echo "value='$first_name'";}  ?> required><br>
<label for="last_name">Last name:</label><br>
<input type="text" name="last_name" id="last_name" <?php if(isset($last_name)){echo "value='$last_name'";}  ?> required><br><br>
<label for="email">Email:</label><br>
<input type="email" name="clientEmail" id="email" <?php if(isset($email)){echo "value='$email'";}  ?> required><br><br>
<label for="password">Password:</label><br>
<span>*Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> <br><br>
<input type="password" name="password" id="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required><br><br>
<input type="submit" value="Register"><br><br>
<!-- Add the action name - value pair -->
<input type="hidden" name="action" value="register-1">
<a class="form-link" href="#" title="login or register with Namaste Therapy" id="account-register">Already have an account?</a>
</form>


    <footer>
        <?php require  '../partials/therapy-footer.php'; ?>
    </footer>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html><?php 
if (isset($_GET["destroy"])){
    session_destroy();
}
?>