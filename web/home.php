<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE341 | Melissa Hall</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Merriweather&family=Playfair+Display&family=Quicksand&family=Roboto&family=Tangerine&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <h1>Melissa Hall</h1>
    <nav id="nav">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php'; ?>
    </nav>
    <br><br><br>
    <div>
        <figure>
            <figcaption>
                <p class="fig-quote">Nature does not hurry, yet everything is accomplished.</p>
                <p class="fig-author">Lao Tzu</p>
                <img src="images/NeboLoop.JPG" alt="image of mountain path">
            </figcaption>
        </figure>
    </div>
    <div class="container home-div">
        <div class="row">
            <div class="col-sm div-1">
                <p id="purpose0">What is my purpose?</p>

            </div>
        </div>
    </div>

    <div class="container home-div">
        <div class="row">
            <div class="col-sm div-1">
                <div class="home-div">
                    <p id="purpose1">To learn</p>
                </div>
                <div class="home-div">
                    <p id="purpose2">To grow</p>
                </div>
                <div class="home-div">
                    <p id="purpose3">To explore</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>