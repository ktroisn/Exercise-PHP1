<h1>Excercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant 
    clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français➔« Salut », anglais➔« Hello »,
     espagnol➔« Hola »)
</p>

<h2>Résultat</h2>

<?php

$users = array( //Tableau contenant comme clé les prénoms et comme valeur les pays/langues
    "Kylian" => "FR",
    "Martinez" => "ESP",
    "Martin" => "ENG",
);
ksort($users); // Trier le tableau dans l'ordre de A à Z par rapport à la clé

function myLanguages($langue, $name){ // Parametre de notre fonction 
    switch($langue){ // If et else avec des cas a la place, facilitant les conditions longues ? 
        case "FR" : echo "Salut ".$name." !<br>"; // Comparable au if, mais pour un seul CAS pas une condition
        break; // Arreter ce cas
        case "ESP" : echo "Hola ".$name." !<br>";
        break;
        case "ENG" : echo "Hello ".$name." !<br>";
        break; 
        default : echo "La langue n'est pas prise en charge."; // Si la langue n'est pas reconnu afficher le message
    }
}

foreach($users as $key => $value){ // Parcourir le tableau et lui dire comment interpreter notre fonction
    myLanguages($value, $key); // meme parametre que en haut mais cette fois ci on lui de s'appliquer a la value et la key
}

?>