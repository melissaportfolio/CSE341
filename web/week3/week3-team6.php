<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="week3-team6-2.php" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
<?php 
    $majors = array("cs" => "Computer Science", "wdd" => "Web Design and Development", 
"cit" => "Computer Information Technology", "ce" => "Computer Engineering");

foreach ($majors as $key => $value) {
    echo '<input type="radio" name="{$key}" value="{$value}">{$value}';
}
    ?>
<!--Major: <input type="radio" name="major" value="ComputerScience">Computer Science
<input type="radio" name="major" value="WebDesignDevelopment">Web Design and Development
<input type="radio" name="major" value="ComputerInformationTechnology">Computer Information Technology
<input type="radio" name="major" value="ComputerEngineering">Computer Engineering-->
Comments: <textarea name="comment" rows="5" cols="50"></textarea><br>
Continents: <input type="checkbox" id="na" name="continent1" value="North America">
<label for="continent1">North America</label><br>
Continents: <input type="checkbox" id="sa" name="continent2" value="South America">
<label for="continent2">South America</label><br>
Continents: <input type="checkbox" id="eu" name="continent3" value="Europe">
<label for="continent3">Europe</label><br>
Continents: <input type="checkbox" id="as" name="continent4" value="Asia">
<label for="continent4">Asia</label><br>
Continents: <input type="checkbox" id="au" name="continent5" value="Australia">
<label for="continent5">Australia</label><br>
Continents: <input type="checkbox" id="af" name="continent6" value="Africa">
<label for="continent6">Africa</label><br>
Continents: <input type="checkbox" id="an" name="continent7" value="Antarctica">
<label for="continent7">Antarctica</label><br>

<input type="submit" name="submit" value="Submit">


    </form>
</body>
</html>