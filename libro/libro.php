<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Descrizione</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY7<!--  -->6TfkUoSX" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="../style/back.css">

</head>
<body background="../img/narrative.jpg">
	 <h1> DESCRIZIONE </h1>
<font face="SansSerif" size="5" color="black" >

<div class="descrizione">

<?php
require '../db/log.php';
$src_arrive = $_GET["titolo"];
// echo $src_arrive;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book WHERE titolo = '$src_arrive'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<b>Titolo: </b>" .$row["titolo"] ."<br>"
		."<b>Autore: </b>" .$row["autore"] ."<br>"
		."<b>Codice Prodotto: </b>".$row["codice"] ."<br>"
		."<b>Anno: </b>".$row["anno"] ."<br>"
		."<b>Descrizione: </b>".$row["descrizione"] ."<br>";

		echo '<a href="../db/delete_db.php?id='.$row["id"].'">Cancella Libro</a> <br>';
		echo '<a onclick="openform()" class="undi">VUOI MODIFICARE IL LIBRO?</a> <br><br>';

		$id = $row["id"];
		$titolo = $row["titolo"];
		$autore = $row["autore"];
		$codice = $row["codice"];
		$anno = $row["anno"];
		$desc = $row["descrizione"];
	}
} else {
	echo "Nessun Risultato" 
	."<br>"
	.'<a href="../libro/inserisci_libro.php">VUOI INSERIRE UN NUOVO LIBRO?</a>';
}
$conn->close();

?>

<div id="modform" style="display:none">
<form action="../db/update_db.php" method="GET">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>TITOLO: </label><input type="text" name="titolo" value="<?php echo $titolo; ?>"> <br>
	<label>AUTORE: </label><input type="text" name="autore" value="<?php echo $autore; ?>"> <br>
	<label>CODICE PRODOTTO: </label><input type="text" name="codice" value="<?php echo $codice; ?>"> <br>
	<label>ANNO PUBBLICAZIONE: </label><input type="text" name="anno" value="<?php echo $anno; ?>"> <br>
	<label>DESCRIZIONE: </label> <br> <textarea name="descrizione" id="" cols="30" rows="10"><?php echo $desc; ?></textarea> <br>
	<input type="submit" value="MODIFICA">
</form>

</div>

</body>
<script>
	function openform() {
		document.getElementById("modform").style.display = 'block';
	}
</script>

</div>
</html>





