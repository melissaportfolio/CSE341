<?php session_start();
if(isset($_POST))   {
    echo $_POST['search'];
    $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE first_name = '".$_POST['search']."'";
} 
elseif(isset($_POST)) {
    echo $_POST['search2'];
    $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE last_name = '".$_POST['search2']."'";
}
else    {
    $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer";
}
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

foreach ($db->query($where) as $row)
{
     var_dump($row);
//   $patient .= '<a href="admin-patient-details.php?customer_id='.$row['customer_id'].'">' 
//   . $row['first_name'] . ' '. $row['last_name'] . '<br>'. $row['street'] . ', ' . $row['city'] 
//   . ' ' . $row['state'] . ' ' . $row['zip'] . '</a><br>';
//     echo 'first: ' . $row['first_name'];
//   echo ' last: ' . $row['last_name'];
//   echo '<br/>';
}
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
    <input type="text" name="search">
    <label for="search"></label>
    <button type="submit" name="submitBtn">Search by First Name</button>
</form>
<form action="" method="post">
    <input type="text" name="search2">
    <label for="search2"></label>
    <button type="submit" name="submitBtn2">Search by Last Name</button>
</form>

<!-- <?php if(isset($patient)){ 
        echo "$patient";}?> -->
        
        <?php
         echo 'first: ' . $row['first_name'];
         echo ' last: ' . $row['last_name'];
         echo '<br/>';
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
