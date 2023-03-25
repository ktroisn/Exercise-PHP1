<h1>Excercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>

<h2>Résultat</h2>
<p>Boucle for<p>
<?php
//nombre a multiplier
$nombre = 8;
$prod = 1;
//boucle for pour aller de x1 a x10 (max)
for($i =1 ; $i<=10; $i++){
    //resultat
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
 
 }
 ?>
<br>

<p>Boucle while</p>
<?php
$nombre = 8;
$prod = 1;
//premiere multiplication
$i = 1;
while($i <= 10){ //boucles while infini si pas de condition <=10
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
    $i++;
}
?>

