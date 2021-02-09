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
    <form action = "adaugare_p.php">
   <h1> Adaugati datele noului pacient:  <br>
   	  ID pacient: <br>
   	   <input type="text"  name="id"><br>
      Nume : <br>
      <input type="text"  name="nume"><br>
      Prenume: <br>
      <input type="text"  name="prenume"><br>
      Email: <br>
      <input type="text"  name="email"><br>
      Numarul de telefon: <br>
      <input type="text"  name="nr_telefon"><br>
      Loc de munca: <br>
      <input type="text"  name="loc_de_munca"><br>
      Data nasterii:</h1> 
      <input type="text"  name="data_nasterii"><br>
      <input type="submit"  value="Submit"><br>
</div>


<?php
include ("afisare_pacient.php");
?>


</section>
</body>
</html>