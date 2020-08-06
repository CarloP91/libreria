<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <form action="db/insert_db.php" method="GET"> 
	
		<label class="chiara">TITOLO:</label>
		<input type="text" name="titolo" value="titolo" required>
		<br>
		<label>AUTORE: </label>
		<input type="text" name="autore" value="autore" required>
		<br>
		<label>CODICE: </label>
		<input type="number" name="codice" value="codice" required>
		<br>
		<label>ANNO: </label>
		<input type="number" name="anno" value="anno" required>
		<br>
		<label>DESCRIZIONE: </label>
		<textarea name="descrizione" value="descrizione"></textarea> 
		<br>
		<br>
		<!-- <label>Inserisci Copertina: </label> <br>
		<input type="file" name="ins_img" accept="image/*"> -->
		<input type="submit" name="submit" value="inserisci">

	</form>

</body>
</html>