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

    Your visited continents are <?php if (isset($_POST["continent1"])){
        echo $_POST["continent1"];
    }?>
    <?php if (isset($_POST["continent2"])){
        echo $_POST["continent2"];
    }?>
    <?php if (isset($_POST["continent3"])){
        echo $_POST["continent3"];
    }?>
    <?php if (isset($_POST["continent4"])){
        echo $_POST["continent4"];
    }?>
    <?php if (isset($_POST["continent5"])){
        echo $_POST["continent5"];
    }?>
    <?php if (isset($_POST["continent6"])){
        echo $_POST["continent6"];
    }?>
    <?php if (isset($_POST["continent7"])){
        echo $_POST["continent7"];
    }?>
</body>
</html>