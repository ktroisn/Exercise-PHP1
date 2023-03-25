<h1>Excercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
  $dateNaissance = "17-01-1985"; //Date de naissance 
  $aujourdhui = date("Y-m-d"); //Date d'aujourdh'ui
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui)); //Calculer la difference entre deux dates
  echo "Date de naissance : ".$dateNaissance."<br>"; 
  echo 'Votre age est '.$diff->format('%y ans %m mois et %d jours'); // Format de date : %y = année
?>