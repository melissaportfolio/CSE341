<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 Team Activity</title>
</head>
<body>
    <h1>Week 3 Team Activity</h1>
    <form id="student" action="week3action.php" method="post">
    <label for="name">Name</label>
    <input id="name" name="name" type="text" placeholder="Name" required>
    <label for="email">Email</label>
    <input id="email" name="email" type="email" placeholder="email" required>
<?php
$majors = array();
$majors["cs"] = "Computer Science";
$majors["wdd"] = "Web Design and Development";
$majors["cit"] = "Computer Information Technology";
$majors["ce"] = "Computer Engineering";

foreach($majors as $key=>$value){
    echo "<input id='major-{$key}' name='major' type='radio' value='{$key}'>";
    echo "<label for='major-{$key}'>{$value}</label>";
    }
?>
    <input id="major-cs" name="major" type="radio" value="cs" selected>
    <label for="major-cs">Computer Science</label>
    <input id="major-wdd" name="major" type="radio" value="wdd">
    <label for="major-wdd">Web Design and Development</label>
    <input id="major-cit" name="major" type="radio" value="cit">
    <label for="major-cit">Computer Information Technology</label>
    <input id="major-ce" name="major" type="radio" value="ce">
    <label for="major-ce">Computer Engineering</label>

    <label for="comments">Comments</label>
    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Comments"></textarea>
    <button type="submit" value="submit"></button>
    <input id="continent-na" name="continent-na" type="checkbox" value="namerica">
    <label for="continent-na">
    <input id="continent-sa" name="continent-sa" type="checkbox" value="samerica">
    <label for="continent-sa">
    <input id="continent-eu" name="continent-eu" type="checkbox" value="europe">
    <label for="continent-eu">
    <input id="continent-asia" name="continent-asia" type="checkbox" value="asia">
    <label for="continent-asia">
    <input id="continent-au" name="continent-au" type="checkbox" value="australia">
    <label for="continent-au">
    <input id="continent-af" name="continent-af" type="checkbox" value="africa">
    <label for="continent-af">
    <input id="continent-ant" name="continent-ant" type="checkbox" value="antarctica">
    <label for="continent-ant">
    </form>
</body>
</html>