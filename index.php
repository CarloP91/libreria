<!DOCTYPE html>
<html>
<head>
	<title>libreria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

	<img class="img-fluid" src="img/narrative.jpg">


	<h1> LIBRERIA </h1>
<div class="topnav">
   <div class="search-container">
    <form action="libro/libro.php" method="GET">
      <input type="text" placeholder="libro, autore..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Responsive Search Bar</h2>
  <p>Navigation bar with a search box and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div>





  <!--   <form action="db/insert_db.php" method="GET"> 
	
		<label class="chiara">TITOLO: </label>
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
		<input type="submit" name="submit" value="salva">

	</form>
-->

</body>
</html>