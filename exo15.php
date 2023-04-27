<h1>Excercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Résultat</h2>

<?php 

    class Personne { 
        // Une classe un ensemble detat et de comportement, l'etat = propriete, comportement = manipuler les objets
        public string $nom;
        public string $prenom;
        public DateTime $dateDeNaissance; // Creer un objet de date avec la prop DateTime

        public function __construct(string $nom, string $prenom, string $date){ // Creation d'un l'objet
                $this->nom = $nom; // $this = objet en cours
                $this->prenom = $prenom;
                $this->dateDeNaissance = new DateTime($date);
            }

        public function calculerDateNaissance(){ // Fonction pour calculer l'age d'une personne
            $now = new DateTime(); // Date d'aujourd'hui
            $dateNaissance = $this->dateDeNaissance; // Indiquer quel la variable dateNaissance est dateDeNaissance

            $diff = date_diff($dateNaissance, $now); // Calculer la difference entre deux dates

            return $diff->y; // afficher la difference en année
        }

        public function __toString(){ // Fonction permmettant de retourner une string a partir de plusieurs valeurs
            return $this->nom." ".$this->prenom." à ".$this->calculerDateNaissance()." ans.<br>";
        }
    }

    $p1 = new Personne("NAIMAR", "Jean", "1999-12-10"); // instance de class
    $p2 = new Personne("OCHON", "Paul", "1985-01-17");

    echo $p1;
    echo $p2;

    
?>