<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous"> -->

	<link rel="stylesheet" type="text/css" href="../style/style_new_srcbar.css">
	<script src="../js/srcbar_function.js"></script>
</head>
<body>

<!-- 
	<img class="img-fluid" src="../img/narrative.jpg"> -->


	<!-- <h1> LIBRERIA </h1>
	<div class="topnav">
		<div class="search-container">
			<form action="libro/libro.php" method="GET">
				<input type="text" placeholder="libro, autore..." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div> -->

	<div><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
 <!--  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>-->
  <?php include '../db/select_libro_src.php'?>
</ul>  
</div>
		
	<?php include '../db/select_libro.php' ?>

</body>
</html>