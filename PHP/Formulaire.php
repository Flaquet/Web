<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>

<body>

    <h2>
        Mon Formulaire
    </h2>

    <?php

    if (isset($_GET["lechiffre"])) {
        echo "Ma valeur est : " . $_GET["lechiffre"];
    } else {
        echo "Formulaire non fait";
        ?>
        <form action="Formulaire.php" method="GET">

            <label>
                Votre chiffre
            </label>
            <input type="text" name="lechiffre">
            <input type="submit" name="valider" value="cliquer pour valider">
        </form>

    <?php
    }

    ?>

</body>

</html>