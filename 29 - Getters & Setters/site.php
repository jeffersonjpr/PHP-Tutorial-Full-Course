<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and set</title>
</head>

<body>

    <?php
    include "movie.php";

    $movie1 = new Movie("The Matrix", "test");
    // $movie1->setRating("R");
    echo $movie1->getRating() . "<br>";
    ?>

</body>

</html>