<h1>Excercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « mars » par le mot « février ».
     Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

    <?php
    $phrase = "Notre formation Développeur Web à commencé le 13 mars.";
    $replace = (str_replace("mars", "février", $phrase));
    echo "".$phrase."<br>";
    echo $replace;
    ?>

