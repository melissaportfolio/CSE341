<?php session_start();

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Namaste Therapy</title>
    <link rel="stylesheet" href="../css/therapy.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat&family=Nunito&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<h1>Namaste Therapy</h1>
<nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Checkout Confirmation</h2>
<div class="confirmation">
    <p>Thank you</p> <?php echo "<p>" . $name . "</p>";?>
    <p>Email: </p><?php echo "<p>" . $email . "</p>";?>
   <p> Mailing Address </p><?php echo "<p>" . $address . "</p>";?>
   <p> Order Summary</p> <?php foreach ($_SESSION as $key => $value)
{
    echo "<p>" . $value . "</p>";
}?>
</div>

<footer>
        <?php require  '../partials/therapy-footer.php'; ?>
    </footer>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>