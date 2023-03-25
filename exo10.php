<h1>Excercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur
     un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php
    $aPayer = 200;
    $payer = 152;   
    $rendu = 200 - 152;

    //billet de 10
    $billetDix = floor($rendu / 10);
    $reste = $rendu % 10;

    //billet de 5
    $billetCinq = floor($reste / 5);
    $reste = $reste % 5;

    //piece de 2
    $pieceDeux = floor($reste / 2);
    $reste = $reste % 2;

    //piece de 1
    $pieceUn = floor($reste /1);
    $reste = $reste % 1;

    echo "Le total a payer est de ".$payer."€.<br>";
    echo "Le client à donné ".$aPayer."€.<br>";
    echo "Rendu : ".$rendu."€.<br>";
    echo "Rendu monnaie :<br>";
    echo "$billetDix billets de 10€<br>";
    echo "$billetCinq billets de 5€<br>";
    echo "$pieceDeux pièces de 2€<br>";
    echo "$pieceUn pièces de 1€";
?>