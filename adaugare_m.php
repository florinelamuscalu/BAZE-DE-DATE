<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Inserare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_afis.css">
</head>
<body>
  <div class = adaugare>
<?php
// Inserare

include "db_conect.php";

$id_m = $_GET["id_medic"];
$cod = $_GET["cod_sectie"];
$n = $_GET["nume"];
$p = $_GET["prenume"];
$e = $_GET["email"];
$nr_t =  $_GET["nr_telefon"];
$s = $_GET["salary"];

 
echo "<h2> Adauga medic: $id_m $cod $n $p $nr_t $s </h2><br>";

$sql1 = "INSERT INTO medic ( id_medic, cod_sectie, nume, prenume, email, nr_telefon,salary) 
VALUES ($id_m, $cod, '$n', '$p','$e', '$nr_t', '$s' )";

$result = $mysqli->query($sql1);

include "afisare_medic.php";

?>
</div>
</body>
</html>
