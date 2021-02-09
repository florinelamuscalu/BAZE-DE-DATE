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
    <form action = "adaugare_med.php">
   <h1> Adaugati datele medicamentelor:  <br>
      ID medicament: <br>
      <input type="text"  name="id_medicament"><br>
      Nume: <br>
      <input type="text"  name="nume"><br>
       Forma farmaceutica: <br>
      <input type="text"  name="forma_farmaceutica"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_medicament.php";
?>

</section>
</body>
</html>