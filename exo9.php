<h1>Excercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, 
alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php
    $sexe = "H";
    $age = 18;

    echo "Age : ".$age."<br>";
    echo "Sexe : ".$sexe."<br>";


    if($sexe == "H" and $age >= 20){
        echo "La personne est imposable";
    }elseif($sexe == "F" and $age >= 18 and $age <= 35){
        echo "La personne est imposable";
    }else {
        echo "La personne n'est pas imposable";
    }
    
    
?>

