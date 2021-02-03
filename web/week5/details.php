<?php


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

     $where = "SELECT id, book, chapter, verse, content FROM Scriptures WHERE id = '". $id ."'";

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
  $scripture .= $row['id'].'">' . $row['book'] . ':' . ' '. $row['chapter'] . ' '. $row['verse'] . $row['content'] .'<br>';

}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$scripture?>
</body>
</html>