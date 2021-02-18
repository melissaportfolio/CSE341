<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>

<?php
session_start();
echo "Welcome " . $_SESSION['theUsername'];

?>


</body>
</html>