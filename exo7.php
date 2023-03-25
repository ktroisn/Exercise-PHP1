<h1>Excercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans Pupille : entre 8 et 9 ans Minime : entre 10 et 11 ans Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php
    $age = 5;
    
    if($age >= 6 and $age <= 7){
        echo "L'enfant qui a ".$age." ans fait partis de la catégorie Poussin.";
    } elseif ($age >= 8 and $age <=9) {
        echo "L'enfant qui a ".$age." ans fait partis de la catégorie Pupille.";
    } elseif ($age >= 10 and $age <=11) {
        echo "L'enfant qui a ".$age." ans fait partie de la catégorie Minime.";
    } elseif ($age >= 12) {
        echo "L'enfant qui a ".$age." ans fait partie de la catégorie Cadet.";
    } else {
        echo "L'enfant qui a ".$age." ans ne fait partie d'aucune catégorie.";
    }

    
?>

