<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
</head>
<body>
    <h2>Exercice 4</h2>
    <p>Resolution d'une equation au second degré</p>
    <?php

    function racines($a, $b, $c) {
    
        echo "l'équation $a x² + $b x + $c<br>";
        $del = $b*$b - (4 * $a * $c);
        if ($del > 0){
            $resulta1 = (-$b - sqrt($del))/(2*$a);
            $resulta2 = (-$b + sqrt($del))/(2*$a);
            echo "Cette équation a deux solution possible : $resulta1 et $resulta2";
          }
          if ($del == 0){
            echo "Cette équation a une solution possible à ".-$b/(2*$a);
          }
          if ($del < 0){
            echo "Cette équation n'admet pas de solution.";
          }
    
    }
    racines(1, 2, 3);
    ?>

    <xmp>
    <php

    function racines($a, $b, $c) {
    
        echo "l'équation $a x² + $b x + $c<br>";
        $del = $b*$b - (4 * $a * $c);
        if ($del > 0){
            $resulta1 = (-$b - sqrt($del))/(2*$a);
            $resulta2 = (-$b + sqrt($del))/(2*$a);
            echo "Cette équation a deux solution possible : $resulta1 et $resulta2";
          }
          if ($del == 0){
            echo "Cette équation a une solution possible à ".-$b/(2*$a);
          }
          if ($del < 0){
            echo "Cette équation n'admet pas de solution.";
          }
    
    }
    racines(1, 2, 3);
    ?>
    </xmp>
    <a href="/ProjetBTS/Flaquet/Web/Index.html">Retour</a>
</body>
</html>