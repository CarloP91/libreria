<!DOCTYPE html>
<html>
<head>
	<title>libreria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

/*body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  position: absolute;*/

}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  position: absolute;

}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  position: absolute;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  position: absolute;

}

.topnav a.active {
  background-color: #2196F3;
  color: white;
  position: absolute;

}

.topnav .search-container {
  float: right;
  position: absolute;
  left: 30%;

}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  position: absolute;
  left: 25%;

}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  position: absolute;

}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  position: absolute;

  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

</head>

<body>

	<img class="img-fluid" src="img/narrative.jpg">


	<h1> LIBRERIA </h1>
<div class="topnav">
   <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Responsive Search Bar</h2>
  <p>Navigation bar with a search box and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div>



</body>
</html>