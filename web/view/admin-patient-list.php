<?php 
include '../library/dbConnect.php';
include '../model/account-model.php';
$db = get_db();

if(isset($_POST['search']))   {
    //echo $_POST['search'];
    $search = $_POST['search'];
    $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE first_name = :search OR last_name = :search";
    $stmt = $db->prepare($where);
    $stmt->bindValue(':search', $search, PDO::PARAM_STR);
    $stmt->execute();
} 
elseif(isset($_POST['sort'])) {
    $sort = $_POST['sort'];
    $where1 = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer ORDER BY last_name ASC";
    $stmt = $db->prepare($where1);
    $stmt->bindValue(':sort', $sort, PDO::PARAM_STR);
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
<h1>Namaste Therapy</h1>
    <nav id="nav">
        <?php require  '../partials/therapy-nav.php'; ?>
    </nav>
    <br><br><br>
<h2>Patient List</h2>

<form action="" method="post">
<label for="search">Search by First or Last Name</label><br>
    <input type="text" name="search">
    
    <button type="submit" name="submitBtn">Search</button>
</form>
<form action="" method="post">
<!-- <label for="sort">Sort by Last Name</label><br> -->
    <!-- <input type="text" name="sort"> -->
    
    <button type="submit" name="submitBtn2">Sort by Last Name</button>
</form>
        
        <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            echo "<a class='link' href='admin-patient-details.php?customer_id=" . strval($row['customer_id']) . "&'" . "First Name: " . $row['first_name'] . "</a><br>";
            echo $row['first_name'] . ' ' . $row['last_name'] . '<br>';

        }
        ?>

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
