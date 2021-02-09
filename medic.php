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
    <form action = "adaugare_m.php">
   <h1> Adaugati datele noii ale medicilor :  <br>
      ID medic: <br>
      <input type="text"  name="id_medic"><br>
      COD sectie: <br>
      <input type="text"  name="cod_sectie"><br>
      Nume  : <br>
      <input type="text"  name="nume"><br>
       Prenume: <br>
      <input type="text"  name="prenume"><br>
      Email: <br>
      <input type="text"  name="email"><br>
      Numarul de telefon: <br>
      <input type="text"  name="nr_telefon"><br>
      Salariu: <br>
      <input type="text"  name="salary"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_medic.php";
?>

</section>
</body>
</html>