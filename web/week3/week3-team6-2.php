<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["name"];?>
    Your email address is <?php echo $_POST["email"];?>
    Your major is <?php echo $_POST["major"];?>
    Your comment is <?php echo $_POST["comment"];?>

    Your visited continents are <?php if (isset($_POST["na"])){
        echo $_POST["na"];
    }?><br>
    <?php if (isset($_POST["sa"])){
        echo $_POST["sa"];
    }?><br>
    <?php if (isset($_POST["eu"])){
        echo $_POST["eu"];
    }?><br>
    <?php if (isset($_POST["as"])){
        echo $_POST["as"];
    }?><br>
    <?php if (isset($_POST["au"])){
        echo $_POST["au"];
    }?><br>
    <?php if (isset($_POST["af"])){
        echo $_POST["af"];
    }?><br>
    <?php if (isset($_POST["an"])){
        echo $_POST["an"];
    }?><br>
</body>
</html>