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
    <form action = "adaugare_c.php">
   <h1> Adaugati datele consultatiei:  <br>
      ID consultatie: <br>
      <input type="text"  name="id_consultatie"><br>
      ID pacient: <br>
      <input type="text"  name="id_pacient"><br>
      ID medic : <br>
      <input type="text"  name="id_medic"><br>
       ID diagnostic: <br>
      <input type="text"  name="id_diagnostic"><br>
      Pret: <br>
      <input type="text"  name="pret"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_consultatie.php";
?>

</section>
</body>
</html>