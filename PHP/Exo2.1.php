<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2.1</title>
</head>

<body>


    <h2>Exercice 2.1.a</h2>
    <table border="1">
        <tr>
            <?php
            $tableau = array(1, 2, 3, 4, 5);

            for ($i = 0; $i < 5; $i++) {
                ?>
                <td><?php echo $tableau[$i]; ?></td>
            <?php
            }
            ?>
    </table>

    <h2>Exercice 2.1 B</h2>
    <pre>
        <?php
        $MonTableauDeChiffre = array("Nombre1" => 12, "Nombre2" => 21, "Nombre3" => 37, "Nombre4" => 45, "Nombre5" => 95);

        foreach ($MonTableauDeChiffre as $key => $value) {
            echo "Clé " . $key . " valeur :" . $value . "\n";
        }
        ?>
    </pre>

    <h2>Exercice 2.1.a code</h2>
    <xmp>

        <php $tableau=array(1, 2, 3, 4, 5); for ($i=0; $i < 5; $i++) { ?>
            <td>
                <php echo $tableau[$i]; ?>
            </td>
            <php } ?>

    </xmp>

    <h2>Exercice 2.1 B code</h2>
    <xmp>
        <php $MonTableauDeChiffre=array("Nombre1"=> 12, "Nombre2" => 21, "Nombre3" => 37, "Nombre4" => 45, "Nombre5" => 95);

            foreach ($MonTableauDeChiffre as $key => $value) {
            echo "Clé " . $key . " valeur :" . $value . "\n";
            }
            ?>
    </xmp>
    <div>
        <a href="/ProjetBTS/Flaquet/Web/Index.html">Retour</a>
    </div>

</body>

</html>