<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "assane";
$password = "votre_mot_de_passe";
$dbname = "votre_base_de_donnees";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Exécution de la première requête SQL SELECT
$sql1 = "SELECT * FROM table1";
$result1 = $conn->query($sql1);

// Vérifier si la requête a réussi
if ($result1 === FALSE) {
    die("Erreur lors de l'exécution de la première requête : " . $conn->error);
}

// Afficher les résultats de la première requête dans un tableau HTML
echo "<h2>Table 1</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Colonne1</th>
        <th>Colonne2</th>
        <!-- Ajoutez d'autres colonnes selon votre structure de table -->
    </tr>";

while ($row = $result1->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["colonne1"] . "</td>
            <td>" . $row["colonne2"] . "</td>
            <!-- Ajoutez d'autres cellules selon votre structure de table -->
          </tr>";
}

echo "</table>";

// Exécution de la deuxième requête SQL SELECT
$sql2 = "SELECT * FROM table2";
$result2 = $conn->query($sql2);

// Vérifier si la deuxième requête a réussi
if ($result2 === FALSE) {
    die("Erreur lors de l'exécution de la deuxième requête : " . $conn->error);
}

// Afficher les résultats de la deuxième requête dans un deuxième tableau HTML
echo "<h2>Table 2</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>ColonneA</th>
        <th>ColonneB</th>
        <!-- Ajoutez d'autres colonnes selon votre structure de table -->
    </tr>";

while ($row = $result2->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["colonneA"] . "</td>
            <td>" . $row["colonneB"] . "</td>
            <!-- Ajoutez d'autres cellules selon votre structure de table -->
          </tr>";
}

echo "</table>";

// Fermer la connexion à la base de données
$conn->close();
?>
