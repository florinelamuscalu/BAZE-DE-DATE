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
    <form action = "adaugare_dr.php">
   <h1> Adaugati datele noii fise medicale:  <br>
      ID detaliu reteta: <br>
      <input type="text"  name="id_detaliu_reteta"><br>
      ID reteta: <br>
      <input type="text"  name="id_reteta"><br>
      ID medicament : <br>
      <input type="text"  name="id_medicament"><br>
      Pret: <br>
      <input type="text"  name="pret"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_detaliu_reteta.php";
?>

</section>
</body>
</html>