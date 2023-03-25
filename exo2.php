<h1>Excercice 2</h1>

<p>Soit la phrase "Notre formation Développeur Web à commencé le 13 mars."<br>
Ecrire un algorithme permettant de calculer le nombre de mot</p>

<h2>Résultat</h2>

<?php
    $phrase = "Notre formation Développeur Web à commencé le 13 mars.";  
    $nbMots = (str_word_count($phrase)); 
    echo "La phrase : ".$phrase."<br>Contient ".$nbMots." mots. (13 n'est pas un mot)";
?>
