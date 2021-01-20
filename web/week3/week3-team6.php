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
    echo '<input type="radio" name="major" value="'.$value.'">'.$value.'';
}
/*
$map = new \Ds\Map(["NA" => "North America", 
"SA" => "South America",
"EU" => "Europe",
"AS" => "Asia",
"AUS" => "Australia",
"AF" => "Africa",
"ANT" => "Antarctica"]);
*/
    ?>
<!--Major: <input type="radio" name="major" value="ComputerScience">Computer Science
<input type="radio" name="major" value="WebDesignDevelopment">Web Design and Development
<input type="radio" name="major" value="ComputerInformationTechnology">Computer Information Technology
<input type="radio" name="major" value="ComputerEngineering">Computer Engineering-->
Comments: <textarea name="comment" rows="5" cols="50"></textarea><br>
Continents: <input type="checkbox" id="continent1" name="landarea[]" value="na">
<label for="continent1">North America</label><br>
Continents: <input type="checkbox" id="continent2" name="landarea[]" value="sa">
<label for="continent2">South America</label><br>
Continents: <input type="checkbox" id="continent3" name="landarea[]" value="eu">
<label for="continent3">Europe</label><br>
Continents: <input type="checkbox" id="continent4" name="landarea[]" value="as">
<label for="continent4">Asia</label><br>
Continents: <input type="checkbox" id="continent5" name="landarea[]" value="au">
<label for="continent5">Australia</label><br>
Continents: <input type="checkbox" id="continent6" name="landarea[]" value="af">
<label for="continent6">Africa</label><br>
Continents: <input type="checkbox" id="continent7" name="landarea[]" value="an">
<label for="continent7">Antarctica</label><br>

<input type="submit" name="submit" value="Submit">


    </form>
</body>
</html>