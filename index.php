<!DOCTYPE html>
<html>
<head>
    <title>libreria</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>

    <img class="img-fluid" src="img/narrative.jpg">

    <select>
        <option>Ciao</option>
        <option>Papa</option>
    </select>

      <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-3">ciao</div>
            <div class="col"></div>
        </div>
    </div>


    <form action="db/insert_db.php" method="GET"> 

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


</body>
</html>