<?php
include '../library/dbConnect.php';
include '../model/account-model.php';

$db = get_db();
$customer_id = $_POST['customer_id'];
// echo 'Hello' . $customer_id;
// $customer_id = filter_input(INPUT_GET, 'customer_id', FILTER_VALIDATE_INT);

// echo 'this is the customer id = ' . $customer_id;

// $where1 = "DELETE FROM journal WHERE customer_id = :customer_id";
// $stmt = $db->prepare($where1);
// $stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
// $stmt->execute();
if(isset($_POST['update']))   {
    //echo $_POST['search'];
    $update = $_POST['update'];
    $where4 = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE first_name = :update OR last_name = :update";
    $stmt = $db->prepare($where4);
    $stmt->bindValue(':update', $update, PDO::PARAM_STR);
    $stmt->execute();
} 

$where3 = "UPDATE customer SET first_name = :first_name, last_name = :last_name, email = :email WHERE customer_id = :customer_id";
$stmt = $db->prepare($where3);
$stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
$stmt->execute();

// echo $where1 . 'this is the where 1';
// echo $where2 . 'this is where 2';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Update | Namaste Therapy</title>
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
    <h2>Patient Updated</h2>
    <!-- <?=$patient?> -->

    <h3> Patient updated successfully</h3>

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
