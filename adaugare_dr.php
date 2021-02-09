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

$id_d = $_GET["id_detaliu_reteta"];
$id_r = $_GET["id_reteta"];
$id_m = $_GET["id_medicament"];
$p = $_GET["pret"];

 
echo "<h2> Adauga in detaliu reteta $id_d $id_r $id_m $p </h2><br>";

$sql1 = "INSERT INTO detaliu_reteta ( id_detaliu_reteta, id_reteta, id_medicament, pret) 
VALUES ($id_d, $id_r, $id_m, '$p' )";

$result = $mysqli->query($sql1);

include "afisare_detaliu_reteta.php";

?>
</div>
</body>
</html>
