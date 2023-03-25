<h1>Excercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher
     le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures 
     présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php
    $marques = array("Peugeot", "Renault", "BMW", "Mercedes");
    print_r($marques);
    $nbMarques = count($marques);
    echo "Le nombre de marques est de ".$nbMarques.".";
?>