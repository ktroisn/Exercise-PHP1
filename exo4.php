<h1>Excercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

    <?php
    $chaineDeCaracteres = "Engage le jeu que je le gagne";
    $reverseChaine = strtolower (strrev($chaineDeCaracteres)); // METTRE LA CHAINE DE CARACTERE EN MINISCULE + L'INVERSER AVEC strrev
    if (strtolower($chaineDeCaracteres) === $reverseChaine) { // MET LA CHAINES DE CARACTERE EN  MINISCULE PLUS VERIFIER SI ILS SONT STRICTEMENT EGAL 
        echo $chaineDeCaracteres . ' est palindrome'; 
    } else { // Si le mot n'est pas un palindrome l'afficher
        echo $chaineDeCaracteres . ' n\'est pas palindrome ';
    }
    ?>

