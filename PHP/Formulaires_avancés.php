<?php
try {

    $db = new PDO("mysql:host=192.168.65.204; dbname=personnages", "root", "root");

    $DonneeBruteUser = $base->query("select * from user");
    $TabUserIndex = 0;
    while ($tab = $DonneeBruteUser->fetch()) {
        //ici on creer nos objets User pour chaque tuple de notre requête
        //et on les places dans un tableau de User
        $TabUser[$TabUserIndex++] = new User($tab['ID_User'], $tab['Nom']);
    }
} catch (Exception $e) {
    echo "ereur : " . $e->getMessage();
}
