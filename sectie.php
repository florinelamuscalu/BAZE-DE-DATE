<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Inserare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class = "intoarcere" >
    <a href= "index.php">Pagina principala</a>
  </div>
<section>
<div class = introducere>
	<br>
    <form action = "adaugare_s.php">
   <h1> Adaugati datele noii sectii:  <br>
      COD sectie: <br>
      <input type="text"  name="cod_sectie"><br>
      Nume: <br>
      <input type="text"  name="nume"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_sectie.php";
?>

</section>
</body>
</html>