<?php session_start();

function tableu()
{

    echo "<table border><td>Bonjour je suis un tableau</td></table>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\styles.css">
</head>

<body>

    <div>
        <?php tableu(); ?>
    </div>

    <div class="basdepag">
        <?php tableu(); ?>
    </div>

</body>

</html>