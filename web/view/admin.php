<?php 
include '../library/dbConnect.php';
$db = get_db();

if(isset($_POST['search']))   {
    //echo $_POST['search'];
    $search = $_POST['search'];
    $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE first_name = :search OR last_name = :search";
    $stmt = $db->prepare($where);
    $stmt->bindValue(':search', $search, PDO::PARAM_STR);
    $stmt->execute();
} 

else    {
    $patientInfo = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer";
    $stmt = $db->prepare($patientInfo);
    $stmt->execute();
}

// foreach ($db->query($where) as $row)
// {
//      var_dump($row);
//   $patient .= '<a href="admin-patient-details.php?customer_id='.$row['customer_id'].'">' 
//   . $row['first_name'] . ' '. $row['last_name'] . '<br>'. $row['street'] . ', ' . $row['city'] 
//   . ' ' . $row['state'] . ' ' . $row['zip'] . '</a><br>';
//     echo 'first: ' . $row['first_name'];
//     echo ' last: ' . $row['last_name'];
//     echo '<br/>';
// }
// foreach ($db->query('SELECT first_name, last_name FROM customer') as $row)
// {
//   echo 'first: ' . $row['first_name'];
//   echo ' last: ' . $row['last_name'];
//   echo '<br/>';
// }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List | Namaste Therapy</title>
    <link rel="stylesheet" href="../css/therapy.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat&family=Montserrat+Alternates&family=Nunito&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="header-div">
    <h1>Namaste Therapy</h1>
    </div>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Admin Page</h2>



<a class="link" href="admin-patient-list.php">View Patient List</a><br><br>
<a class="link" href="admin-add-patient.php">Add Patient</a><br><br>



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
