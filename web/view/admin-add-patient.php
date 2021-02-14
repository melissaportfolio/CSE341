<?php 
include '../library/dbConnect.php';
include '../model/account-model.php';
$db = get_db();

if(isset($_POST['add']))   {
    //echo $_POST['search'];
    $add = $_POST['add'];
    $addPatient = "INSERT INTO customer(first_name, last_name, street, city, state, zip, email)
    VALUES(:first_name, :last_name, :street, :city, :state, :zip, :email)";
    $stmt = $db->prepare($addPatient);
    // $stmt->bindValue(':add', $add, PDO::PARAM_STR);
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindValue(':street', $street, PDO::PARAM_STR);
    $stmt->bindValue(':city', $city, PDO::PARAM_STR);
    $stmt->bindValue(':state', $state, PDO::PARAM_STR);
    $stmt->bindValue(':zip', $zip, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
} 

else    {
    $patientInfo = "SELECT customer_id, first_name, last_name, street, city, state, zip FROM customer";
    $stmt = $db->prepare($patientInfo);
    $stmt->execute();
}

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
<h2>Add Patient</h2>

<form action="" method="post">
<!-- <label for="add">Add Patient</label><br>
    <input type="text" name="add"> -->
    <label for="first_name">First Name</label><br>
    <input type="text" name="first_name"><br>
    <label for="last_name">Last Name</label><br>
    <input type="text" name="last_name"><br>
    <label for="street">Street Address</label><br>
    <input type="text" name="street"><br>
    <label for="city">City</label><br>
    <input type="text" name="city"><br>
    <label for="state">State</label><br>
    <input type="text" name="state"><br>
    <label for="zip">Zip</label><br>
    <input type="text" name="zip"><br>
    <label for="email">Email Address</label><br>
    <input type="text" name="email"><br>
    
    <button type="submit" name="add">Add to Patients</button>
</form>

<a class="link" href="admin-patient-list.php">Return to Patient List</a>

        
      

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
