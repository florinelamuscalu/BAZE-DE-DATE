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

$id_f = $_GET["id_fisa_medicala"];
$id_p = $_GET["id_pacient"];
$n = $_GET["nume"];
$a = $_GET["alergii"];
$nr_t =  $_GET["nr_telefon"];
$t = $_GET["timp"];
$frec = $_GET["frecventa"];
$mot = $_GET["motiv"];

 
echo "<h2> Adauga in fisa medicala: $id_f $id_p $n $a $nr_t $t $frec $mot </h2><br>";

$sql1 = "INSERT INTO fisa_medicala ( id_fisa_medicala, id_pacient, nume_ruda, alergii, nr_telefon_ruda, timp , frecventa, motiv) 
VALUES ($id_f, $id_p, '$n', '$a', '$nr_t', '$t', '$frec', '$mot' )";

$result = $mysqli->query($sql1);

include "afisare_fisa_medicala.php";

?>
</div>
</body>
</html>
