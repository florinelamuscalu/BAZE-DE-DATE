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

$id_c = $_GET["id_consultatie"];
$id_p = $_GET["id_pacient"];
$id_m = $_GET ["id_medic"];
$id_d = $_GET ["id_diagnostic"];
$pr = $_GET["pret"];

echo "<h2> Adauga o noua consultatie $id_c $id_p $id_m $id_d $pr </h2><br>";

$sql1 = "INSERT INTO consultatie ( id_consultatie, id_pacient, id_medic, id_diagnostic, pret) 
VALUES ($id_c, $id_p, $id_m, $id_d,'$pr' )";

$result = $mysqli->query($sql1);

include "afisare_consultatie.php";

?>
</div>
</body>
</html>
