
<!DOCTYPE html>
<html>
<head>
  <title>libreria</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY7<!--  -->6TfkUoSX" crossorigin="anonymous">
  
  
  <link rel="stylesheet" type="text/css" href="style/style_new_srcbar.css">

  <script src="js/srcbar_function.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body  background="img/narrative.jpg">
  <!-- <img class="img-fluid" src="img/narrative.jpg"> -->
  
  
 

  <h1> LIBRERIA </h1>
<!-- <div class="topnav">
   <div class="search-container">
    <form action="libro/libro.php" method="GET">
      <input type="text" placeholder="libro, autore..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="subsrc"><?php    include 'db/random_select_db.php'       ?></div>  Perché funzioni, ci devono essere almeno 3 libri nel DB
  </div>
</div>
<div style="padding-left:16px">
  <h2>Responsive Search Bar</h2>
  <p>Navigation bar with a search box and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div> -->

<div class="row">
  
<div class="col-5">
<input type="text" id="myInput" onkeyup="srcfnt()" placeholder="Search for names..">

<button onclick="window.location.href='libro/inserisci_libro.php'">INSERISCI LIBRO</button>


  <div id="hidesrc" style="display:none">

<ul id="myUL">
<?php include 'db/select_libro_src.php'?>
</ul>  
</div>
</div>
</div>

</body>
</html>

