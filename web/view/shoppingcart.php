<?php session_start();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Namaste Therapy</title>
</head>
<body>
<h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Checkout</h2>
<form action="confirmation.php" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Mailing Address: <input type="text" name="address"><br>
Order summary: <?php foreach ($_SESSION as $key => $value)
{
    echo "<p>" . $value . "</p>";
}?>


</form>
<a href="/web/view/browse-items.php">Return to Cart</a>

    <footer>
        <?php require  '../partials/footer.php'; ?>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>