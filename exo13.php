<h1>Excercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). 
    Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php
    $note = array(10, 12 ,8, 19, 3, 16, 11, 13, 9); //Tableau contenant les notes
    $nbNote = count($note); // Compter le nombre de note
    $sumNote = array_sum($note); // Additioner toutes les notes
    $moyenne = $sumNote / $nbNote; // Diviser la somme des notes par le nombre de celle ci
    $moyenne = number_format($moyenne, 2, ',', ' '); //Afficher un chiffre avec deux décimale
    echo "Les notes obtenus par l'élève : ".implode(" ",$note)."<br>"; //Afficher le contenu d'un tableau en chaine de caractère
    echo "Sa moyenne générale est donc de : ".$moyenne.""; //Affichage de la moyenne
?>