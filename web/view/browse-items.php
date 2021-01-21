<?php session_start();
require_once("checkout.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Items | Namaste Therapy</title>
</head>
<body>
<h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Purchase a therapy session:</h2>


<form action="checkout.php" method="post">
<input id="session_ind" name="therapy" type="radio" value="therapy">
<label for="session_ind">One hour individual session:</label>
<input id="session_fam" name="therapy" type="radio" value="therapy">
<label for="session_fam">One hour family session:</label>
<input id="session_ind_10" name="therapy" type="radio" value="therapy">
<label for="session_ind_10">Bundle of 10 individual sessions:</label>
<input id="session_fam_10" name="therapy" type="radio" value="therapy">
<label for="session_fam_10">Bundle of 10 family sessions:</label>
<button type="submit" name="submit" value="true">Checkout</button>
</form>


    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '../partials/footer.php'; ?>
    </footer>
    <script src="js/main.js"></script>
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