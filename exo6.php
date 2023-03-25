<h1>Excercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors
     taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

    <?php
    //Prix, tva, quantité
    $tva = 0.2;
    $quantity = 5;
    $input = 9.99; 
    //calcul du resultat
    $calculTva = $input * $tva;
    $result = $calculTva + $input;
    $result2 = $result * $quantity;
    echo "Le montant de la facture à régler est de  ".$result2." euros."
    
    ?>

