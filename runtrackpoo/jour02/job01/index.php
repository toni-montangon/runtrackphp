<?php
//Créer une classe “Rectangle” avec des attributs privés, “longueur” et“largeur” initialisés dans le constructeur.
//Créer des assesseurs et mutateurs afin de pouvoir afficher et modifier lesattributs de la classe.

//Créer un rectangle avec les valeurs suivantes : longueur 10 et largeur 5.
//Changer la valeur de la longueur et de la largeur et vérifier que les modifications soient bien prises en compte.
class Rectangle {
    // Attributs privés
    private $longueur;
    private $largeur;

    // Constructeur pour initialiser les valeurs
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseurs (getters)
    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (setters)
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Méthode pour afficher les dimensions
    public function afficher() {
        echo "Longueur: " . $this->longueur . ", Largeur: " . $this->largeur . "\n";
    }
}

// Création du rectangle avec longueur 10 et largeur 5
$monRectangle = new Rectangle(10, 5);

// Affichage des dimensions initiales
$monRectangle->afficher();

// Modification des dimensions du rectangle
$monRectangle->setLongueur(15);
$monRectangle->setLargeur(8);

// Vérification des modifications
$monRectangle->afficher();
?>

