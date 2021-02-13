<?php
include '../library/dbConnect.php';
include '../model/account-model.php';
$db = get_db();
$customer_id = $_POST['customer_id'];
echo 'Hello' . $customer_id;
$customer_id = filter_input(INPUT_GET, 'customer_id', FILTER_VALIDATE_INT);

$where = "DELETE FROM journal WHERE customer_id = :customer_id";
$stmt = $db->prepare($where);
$stmt->bindValue(':customer_id', $customer_id);
$stmt->execute();

$where = "DELETE FROM customer WHERE customer_id = :customer_id";
$stmt = $db->prepare($where);
$stmt->bindValue(':customer_id', $customer_id);
$stmt->execute();

echo $where . 'this is the where';
echo $customer_id . 'this is the customer id'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details | Namaste Therapy</title>
    <link rel="stylesheet" href="../css/therapy.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat&family=Montserrat+Alternates&family=Nunito&family=Open+Sans&display=swap"
        rel="stylesheet">
</head>

<body>
    <h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
    <h2>Patient Details</h2>
    <?=$patient?>

    <h3> Patient deleted successfully</h3>

    <form method="post" action="admin-patient-list.php">





        <input type="submit" class="regbtn" name="submit" value="Return to Patient List">


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

</html>
