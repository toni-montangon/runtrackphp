<?php


class Personne {
    protected $age;

    public function __construct($age = 14) {
        $this->age = $age;
    }

    public function afficherAge() {
        echo "J'ai {$this->age} ans.\n";
    }

    public function bonjour() {
        echo "Hello\n";
    }

    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}

class Eleve extends Personne {
    public function __construct($age = 14) {
        parent::__construct($age);
    }

    public function allerEnCours() {
        echo "Je vais en cours\n";
    }

    public function afficherAge() {
        echo "J'ai {$this->age} ans.\n";
    }
}

class Professeur {
    private $matiereEnseignee;
    protected $age;

    public function __construct($matiereEnseignee, $age) {
        $this->matiereEnseignee = $matiereEnseignee;
        $this->age = $age;
    }

    public function enseigner() {
        echo "Le cours va commencer\n";
    }

    public function bonjour() {
        echo "Bonjour, je suis le professeur !\n";
    }
}

$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCours(); 
$eleve->modifierAge(15);
$eleve->afficherAge();

$professeur = new Professeur("Mathématiques", 40);
$professeur->bonjour(); 
$professeur->enseigner(); 

?>

