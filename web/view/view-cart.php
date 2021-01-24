<?php session_start();


if (isset($_POST['removeItemOne_hour_individual_session']))
{
    unset($_SESSION['therapy1']);
}
if (isset($_POST['removeItemOne_hour_family_session']))
{
    unset($_SESSION['therapy2']);
}
if (isset($_POST['removeItemBundle_of_10_individual_sessions']))
{
    unset($_SESSION['therapy3']);
}
if (isset($_POST['removeItemBundle_of_10_family_sessions']))
{
    unset($_SESSION['therapy4']);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Namaste Therapy</title>
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
<h2>Shopping Cart</h2>
<!--
<form id="checkout" action="confirmation.php" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Mailing Address: <input type="text" name="address"><br>
</form>
-->
<p>Order summary:</p> <?php foreach ($_SESSION as $key => $value)
{
    str_replace($value,"-"," ");
    echo "<p>" . $value . "</p>" .
    "<form action='' method='post'>" 
    . "<button  type='submit' name='removeItem" . $value . "' value='true'>Remove</button>"
    . "</form>";
}?>
<!--
<button onclick="checkout()" type="submit" name="submit" value="true">Checkout</button>
-->
<br><br>
<a class="link-button" href="checkout.php">Checkout</a><br><br><br>
<a class="link" href="browse-items.php">Return to Browse</a><br>


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
