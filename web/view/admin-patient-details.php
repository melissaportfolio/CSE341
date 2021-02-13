<?php
include '../library/dbConnect.php';
include '../model/account-model.php';

$db = get_db();


$id = filter_input(INPUT_GET, 'customer_id', FILTER_VALIDATE_INT);

     $where = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer WHERE customer_id = '". $id ."'";

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
    //var_dump($row);
    $patient .= $row['first_name'] . ' '. $row['last_name'] . '<br>'. $row['street'] . ', ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '<br>';
    $customerID = $row['customer_id'];
}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details | Namaste Therapy</title>
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
<h2>Patient Details</h2>
<?=$patient?>

<form method="post" action="admin-patient-delete.php">

<!-- <?php if (isset($patient['first_name'])) {
 echo "value='$customer_id[first_name]'"; } ?><br><br> -->

<!-- <?php
echo $customerID;?> -->


<input type="submit" class="regbtn" name="submit" value="Delete Patient">

<input type="hidden" name="customer_id1" value="1">
<input type="hidden" name="customer_id" value="<?php if (isset($customerID)) {
                                                echo $customerID;
                                            } ?>">


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
