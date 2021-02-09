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
    <form action = "adaugare_f.php">
   <h1> Adaugati datele noii fise medicale:  <br>
      ID fisa: <br>
      <input type="text"  name="id_fisa_medicala"><br>
      Id pacient: <br>
      <input type="text"  name="id_pacient"><br>
      Nume ruda : <br>
      <input type="text"  name="nume"><br>
       Alergii: <br>
      <input type="text"  name="alergii"><br>
      Numarul de telefon: <br>
      <input type="text"  name="nr_telefon"><br>
      Timp: <br>
      <input type="text"  name="timp"><br>
      Frecventa: <br>
      <input type="text"  name="frecventa"><br>
      Motiv :</h1> 
      <input type="text"  name="motiv"><br>
      <input type="submit"  value="Submit"><br>
</div>

<?php
include "afisare_fisa_medicala.php";
?>

</section>
</body>
</html>