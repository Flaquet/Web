<?php session_start();

function tableau3col()
{

    echo "<table border><tr><td>colone 1</td></tr><tr><td>colone 2</td></tr><tr><td>colone 3</td></tr></table>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\styles2.css">
</head>

<body>
    <div><?php tableau3col(); ?></div>
</body>

</html>