<?php session_start();

function tableau3col()
{
    $tableau=array("nom"=> "Flaquet", "prenom" => "Edouard", "mdp" => "123");
    
    echo "<table border><tr><td>".$tableau["nom"]."</td></tr><tr><td>".$tableau["prenom"]."</td></tr><tr><td>".$tableau["mdp"]."</td></tr></table>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div><?php tableau3col(); ?></div>
</body>

</html>