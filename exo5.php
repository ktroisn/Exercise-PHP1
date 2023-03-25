<h1>Excercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra
     être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

    <?php
    $conversion_ratio = 0.1524; // Coeff
    $input = 100; // Nos francs
    $result = $input * $conversion_ratio; // Le resultat est egale a Nos francs fois notre coeff

    echo "T'es ".$input." francs on une valeur de ".$result." euros."
    
    ?>

