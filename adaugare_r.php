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

$id_r = $_GET["id_reteta"];
$id_d = $_GET["id_diagnostic"];
$p = $_GET["perioada"];

 
echo "<h2> Adauga reteta $id_r $id_d $p </h2><br>";

$sql1 = "INSERT INTO reteta ( id_reteta, id_diagnostic, perioada) 
VALUES ($id_r, $id_d, '$p' )";

$result = $mysqli->query($sql1);

include "afisare_reteta.php";

?>
</div>
</body>
</html>
