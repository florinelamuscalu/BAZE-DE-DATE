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
    <form action = "adaugare_r.php">
   <h1> Adaugati datele noii fise medicale:  <br>
      ID reteta: <br>
      <input type="text"  name="id_reteta"><br>
      Id diagnostic: <br>
      <input type="text"  name="id_diagnostic"><br>
      Perioada : <br>
      <input type="text"  name="perioada"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_reteta.php";
?>

</section>
</body>
</html>