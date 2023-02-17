<!DOCTYPE html>
<html>
<head>
	<title>Offres de stage</title>
</head>
<body>
	<h1>Liste des offres de stage</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Société</th>
				<th>Poste</th>
				<th>Responsable</th>
				<th>Date de début</th>
				<th>Date de fin</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Connexion à la base de données
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "offrestage";

				try {
					$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
					echo "Connection failed: " . $e->getMessage();
				}
				
				// Récupération des offres de stage
				$requete = $pdo->query("SELECT * FROM offre");
				$offres = $requete->fetchAll();

				// Affichage des offres de stage
				foreach ($offres as $offre) {
					echo "<tr>";
					echo "<td>".$offre['ID_Offre']."</td>";
					echo "<td>".$offre['Societe']."</td>";
					echo "<td>".$offre['Poste']."</td>";
					echo "<td>".$offre['Responsable']."</td>";
					echo "<td><a href='postuler.php?id=".$offre['ID_Offre']."'>Postuler</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>