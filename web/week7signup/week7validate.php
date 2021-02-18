<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
</head>
<body>

<?php
session_start();

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

$username2 = $_POST["username"];
$password2 = $_POST["password2"];

$usrpass = 'SELECT username, password FROM users WHERE username = :username2';

$stmt = $db->prepare($usrpass);
$stmt->bindValue(':username2', $username2, PDO::PARAM_STR);

$stmt->execute();

$results = $stmt->fetch();

$stmt->closeCursor();

if ($results['password'] === $password2) {
    echo 'login success';
    $_SESSION['theUsername'] = $username2;
    $newURL = "week7welcome.php";
    header('Location: ' . $newURL);
    die();
}
else {
    echo 'login unsuccessful';
    $newURL2 = "week7signin.php";
    header('Location: ' . $newURL2);
    die();
}

?>

</body>
</html>