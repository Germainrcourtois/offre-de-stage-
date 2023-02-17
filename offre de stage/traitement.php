<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numeroInsee = $_POST['numero_insee'];
/*$idOffre = $_POST['idOffre'];*/

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "offrestage";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// Préparer et exécuter la requête d'insertion
$sql = "INSERT INTO etudiant (Nom, Prenom, numeroInsee)
        VALUES ('$nom', '$prenom', '$numeroInsee')";

if (mysqli_query($conn, $sql)) {
    echo "Votre candidature a été enregistrée avec succès.";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
