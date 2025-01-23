<?php
// Étape 1: Connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "root";        // Nom d'utilisateur MySQL (par défaut root pour les serveurs locaux)
$password = "";            // Mot de passe (par défaut vide pour les serveurs locaux comme XAMPP ou WAMP)
$dbname = "jour08";        // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Étape 2: Récupérer les données de la table "etudiants"
$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$result = $conn->query($sql);

// Étape 3: Affichage dans un tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>";

    // Afficher chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["prenom"] . "</td>
                <td>" . $row["nom"] . "</td>
                <td>" . $row["naissance"] . "</td>
                <td>" . $row["sexe"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>