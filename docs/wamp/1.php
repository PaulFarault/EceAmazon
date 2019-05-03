<!DOCTYPE html>
<html>
<head>
	<title>TP2</title>
</head>
<body>
	<form action="1traitement.php" method="post">
		<tr>
			<td>Nom de l'employée</td>
			<td><input type="text" name="nom"/></td>
		</tr>
		<tr>
			<td>Numéro d'employée</td>
			<td><input type="text" name="numero"/></td>
		</tr>
		<tr>
			<td>Ancienneté</td>
			<td><input type="number" name="anciennete"/></td>
		</tr>
		<tr>
			<td>Classe</td>
			<td>
				<select name="classe">
				    <option value="direction">Direction</option>
					<option value="professionnel">Professionnel</option>
					<option value="non_professionnel">Non professionnel</option>
					<option value="contractuel">Contractuel</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Soumettre" /></td>
		</tr>
	</form>
</body>
</html>