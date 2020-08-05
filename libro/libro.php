<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style/stylegenerico.css">
</head>
<body>


	<img class="img-fluid" src="../img/narrative.jpg">


	<h1> LIBRERIA </h1>
	<div class="topnav">
		<div class="search-container">
			<form action="libro/libro.php" method="GET">
				<input type="text" placeholder="libro, autore..." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<?php include '../db/select_libro.php' ?>

	<?php  ?>
</body>
</html>