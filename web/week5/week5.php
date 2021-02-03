<?php
if(isset($_POST))   {
    echo $_POST['search'];
    $where = "SELECT id, book, chapter, verse, content FROM Scriptures WHERE book = '".$_POST['search']."'";
} 
else    {
    $where = "SELECT id, book, chapter, verse, content FROM Scriptures";
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
  $scripture .= '<a href="details.php?id='.$row['id'].'">' . $row['book'] . ':' . ' '. $row['chapter'] . ' '. $row['verse'] . '</a><br>';

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5 Team Assignment</title>
</head>
<body>
    <h1>Scripture Resources</h1>
<?=$scripture?>
<form action="" method="post">
    <input type="text" name="search">
    <label for="search"></label>
    <button type="submit" name="submitBtn">Submit</button>
</form>
</body>
</html>