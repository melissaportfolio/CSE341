<?php session_start();

if(isset($_POST['name']))
{
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : array();
    $name[] = $_POST['name'];
    $_SESSION['name'] = $name;
}
if (isset($_POST['removeItemOne hour individual session']))
{
    unset($_SESSION['therapy1']);
}

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
<form id="checkout" action="" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Mailing Address: <input type="text" name="address"><br>
Order summary: <?php foreach ($_SESSION as $key => $value)
{
    echo "<p>" . $value . "</p>" .
    "<form action='' method='post'>" 
    . "<button  type='submit' name='removeItem" . $value . "' value='true'>Remove</button>"
    . "</form>";
}?>

<button onclick="checkout()" type="submit" name="submit" value="true">Checkout</button>
</form>

<a href="browse-items.php">Return to Cart</a>

    <footer>
        <?php require  '../partials/therapy-footer.php'; ?>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>