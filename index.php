<?php
require( "random_quote.php" );
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CSCI E15 HES Course - Self Introduction">
    <title>Self Introduction - Daniel Kasai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="custom_styles.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Daniel Kasai</h1>
    <img src="photo_DK.jpg" alt="Photo of Daniel Kasai">

    <h2>About Me</h2>
    <p>Hi, my name is Daniel Kasai. I live in Hamburg, together with my wife Akiko Kasai.<br/>
        After studying Philosophy, Media Science and Japan Studies, I work for a publishing company and as a freelance
        illustrator.<br/>
        I got more and more involved in programming and now aim for the Web Technologies Certificate, <br/>
        to form a foundation for future web projects.<br/><br/>
        I believe in the power of fresh air and the occasional walk :)
    </p>
    <hr>
    <h3 class="quote_heading">Random Quote</h3>
    <blockquote><?= $random_quote ?></blockquote>
</div>


</body>
</html>
