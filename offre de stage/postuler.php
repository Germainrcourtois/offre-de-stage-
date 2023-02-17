<!DOCTYPE html>
<html>
<head>
	<title>Postuler à une offre de stage</title>
</head>
<body>
	<h1>Postuler à une offre de stage</h1>
	<form method="post" action="traitement.php">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom" required>

		<label for="numero_insee">Numéro INSEE :</label>
		<input type="text" name="numero_insee" id="numero_insee" required>

		<input type="hidden" name="id_offre" value="<?php echo $_GET['id']; ?>">

		<button type="submit">Envoyer</button>
	</form>
</body>
</html>