<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 8</title>
</head>
<body>
    
    <?php
        if (isset ($_POST["champ1"])) {
        $_SESSION["Session"] = $_POST["champ1"] ;
        echo "user ".$_POST["champ1"];   
        }
        if (isset ($_POST["deletesession"])) {
            $_SESSION["Session"] = $_POST["deletesession"] ;
            $_POST["deletesession"] = " a etait detruite";
            echo $_POST["deletesession"];
        }
    ?>

    <form action="Exo8.php" method="POST">
        <p>user : <input type="text" name="champ1" /></p>

        <p><input type="submit" value="OK"></p>
        <p><input type="submit" value="Detruire la session" name="deletesession"></p>
    </form>

    <xmp>
    <php
        if (isset ($_POST["champ1"])) {
        $_SESSION["Session"] = $_POST["champ1"] ;
        echo "user ".$_POST["champ1"];   
        }
        if (isset ($_POST["deletesession"])) {
            $_SESSION["Session"] = $_POST["deletesession"] ;
            $_POST["deletesession"] = " a etait detruite";
            echo $_POST["deletesession"];
        }
    ?>

    <form action="Exo8.php" method="POST">
        <p>user : <input type="text" name="champ1" /></p>

        <p><input type="submit" value="OK"></p>
        <p><input type="submit" value="Detruire la session" name="deletesession"></p>
    </form>
    </xmp>


    <br> <a href="/ProjetBTS/Flaquet/Web/Index.html">Retour list des Exercice</a>

</body>
</html>