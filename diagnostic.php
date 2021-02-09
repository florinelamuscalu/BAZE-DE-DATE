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
    <form action = "adaugare_d.php">
   <h1> Adaugati datele noilor diagnostice:  <br>
      ID diagnostic: <br>
      <input type="text"  name="id_diagnostic"><br>
      Nume  : <br>
      <input type="text"  name="nume"><br>
       Data diagnosticarii: <br>
      <input type="text"  name="data_diagnosticarii"><br>
      Sfarsitul diagnosticarii: <br>
      <input type="text"  name="sfarsitul_diagnosticarii"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_diagnostic.php";
?>

</section>
</body>
</html>