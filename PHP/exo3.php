<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>exercice 3</title>
</head>

<body>

  <h2>Exercice 3</h2>

  <table border="1">

    <?php
    $tableau[0] = array("nom" => "Flaquet", "prenom" => "Edouard", "mdp" => "123");
    $tableau[1] = array("nom" => "Flemal", "prenom" => "Romain", "mdp" => "123");
    $tableau[2] = array("nom" => "Fontagne", "prenom" => "Thomas", "mdp" => "123");

    for ($i = 0; $i < 3; $i++) {
      foreach ($tableau[$i] as $key => $value) {
        ?>

        <tr>
          <td><?php echo $key; ?></td>
          <td><?php echo $value; ?></td>
        </tr>

    <?php
      }
    }
    ?>

  </table>

  <xmp>
    <table border="1">

      <php
      $tableau[0] = array("nom" => "Flaquet", "prenom" => "Edouard", "mdp" => "123");
      $tableau[1] = array("nom" => "Flemal", "prenom" => "Romain", "mdp" => "123");
      $tableau[2] = array("nom" => "Fontagne", "prenom" => "Thomas", "mdp" => "123");

      for ($i = 0; $i < 3; $i++) {
        foreach ($tableau[$i] as $key => $value) {
          ?>

          <tr>
            <td><php echo $key; ?></td>
            <td><php echo $value; ?></td>
          </tr>

      <php
        }
      }
      ?>

    </table>
  </xmp>

  <div>
    <a href="/ProjetBTS/Flaquet/Web/Index.html">Retour</a>
  </div>

</body>

</html>