<?php session_start();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Items | Namaste Therapy</title>
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
<h2>Therapy options</h2>


<form action="" method="POST">
<input id="session_ind" name="therapy1" type="checkbox" value="One_hour_individual_session">
<label for="session_ind">One hour individual session</label><br><br>
<input id="session_fam" name="therapy2" type="checkbox" value="One_hour_family_session">
<label for="session_fam">One hour family session</label><br><br>
<input id="session_ind_10" name="therapy3" type="checkbox" value="Bundle_of_10_individual_sessions">
<label for="session_ind_10">Bundle of 10 individual sessions</label><br><br>
<input id="session_fam_10" name="therapy4" type="checkbox" value="Bundle_of_10_family_sessions">
<label for="session_fam_10">Bundle of 10 family sessions</label><br><br><br>
<button onclick="success()" type="submit" name="submit" value="true">Add to cart</button>
</form>

<a class="link" href="view-cart.php">View Cart</a><br><br>

<!-- <a class="link" href="index.php">Learn more</a> -->


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
<?php 
if (isset($_POST["therapy1"])){
    $_SESSION["therapy1"] = $_POST["therapy1"];
}
if (isset($_POST["therapy2"])){
    $_SESSION["therapy2"] = $_POST["therapy2"];
}
if (isset($_POST["therapy3"])){
    $_SESSION["therapy3"] = $_POST["therapy3"];
}
if (isset($_POST["therapy4"])){
    $_SESSION["therapy4"] = $_POST["therapy4"];
}
?>



