<?php session_start();
require '../library/dbConnect.php';
$db = get_db();
if(isset($_POST['email'])){
echo 'If one';
 $email = $_POST['email'];
 $result = $db->query("SELECT customer_id, email, password FROM customer WHERE email = '$email'");
 var_dump($result);

 $customer_id = $result[0]['customer_id'];
 $email = $result[0]['email'];
 $password = $result[0]['password'];

//  echo 'DB password' . $password;
//  echo 'get password' . $_POST['password'];

 if ($password == $_POST['password']) { 
    // echo 'If two';
    // var_dump($_SESSION);
 $_SESSION['user'] = $result[0]['customer_id'];
//  header('Location: admin.php');
//  exit;
 }
}

if ($_SESSION['user']['email'] == 'admin@namaste.com') {
    header('location: admin.php');
    exit;
   }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Namaste Therapy</title>
    <link rel="stylesheet" href="../css/therapy.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat&family=Montserrat+Alternates&family=Nunito&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Sign In</h2>


            <form action="" method="post">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" <?php if(isset($email)){echo "value='$email'";}  ?> required><br><br>
                <label for="password">Password:</label><br>
                <!-- <span>*Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> <br><br> -->
                <input type="password" name="password" id="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required><br><br>
                <input type="submit" name="action" value="Sign In"><br><br>
                <!-- <input type="hidden" name="action" value="Login"> -->
                <!-- <a class="form-link" href="/web/controller/accounts.php?action=register" title="login or register" id="account-new">Not a member yet?</a> -->
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