<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['name'])){
       $name = $_POST['name'];
       echo "Name: " . $name;
    }

    if (isset($_POST['email'])){
        $email = $_POST['email']; 
        echo "Email: " . $email;
    }

    if (isset($_POST['major'])){
        $major = $_POST['major']; 
        echo "Major: " . $major;
    }

    if (isset($_POST['comments'])){
        $comments = $_POST['comments']; 
        echo "Comments: " . $comments;
    }

    $continent = array();

    if (isset($_POST['continent-na'])) {
        $continent[] = $_POST['continent-na'];
    }

    if (isset($_POST['continent-sa'])) {
        $continent[] = $_POST['continent-sa'];
    }

    if (isset($_POST['continent-eu'])) {
        $continent[] = $_POST['continent-eu'];
    }

    if (isset($_POST['continent-asia'])) {
        $continent[] = $_POST['continent-asia'];
    }

    if (isset($_POST['continent-au'])) {
        $continent[] = $_POST['continent-au'];
    }

    if (isset($_POST['continent-af'])) {
        $continent[] = $_POST['continent-af'];
    }

    if (isset($_POST['continent-ant'])) {
        $continent[] = $_POST['continent-ant'];
    }

    if (count($continent) > 0) {
        echo "Continents Visited: " . join(", ", $continent);
    }

    ?>
</body>
</html>