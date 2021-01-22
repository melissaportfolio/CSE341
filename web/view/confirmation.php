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
</head>
<body>
<h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Checkout Confirmation</h2>

    Thank you <?php echo $name;?>
    Email: <?php echo $email;?>
    Mailing Address <?php echo $address;?>
    Order Summary <?php foreach ($_SESSION as $key => $value)
{
    echo "<p>" . $value . "</p>";
}?>


    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '../partials/footer.php'; ?>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>