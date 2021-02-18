<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php



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

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password1 = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
$password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);



if ($password1 == $password2) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    if (preg_match($pattern, $password1)) {

    $sql = "INSERT INTO users (username, password) VALUES (:username, :password1)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password1', $password1, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->rowCount();

    $stmt->closeCursor();

    $newURL = 'week7signin.php';
    header('Location: ' . $newURL);
    die();
    }
    else {
        $newURL2 = 'week7signup.php';
        header('Location: ' . $newURL2);
        die();
    }
}
else {
    $newURL3 = 'week7signup.php';
    header('Location: ' . $newURL3);
    die();
}

?>

</body>
</html>