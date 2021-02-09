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

$cod = $_GET["cod_sectie"];
$n = $_GET["nume"];

 
echo "<h2> Adauga in sectie: $cod, $n </h2><br>";

$sql1 = "INSERT INTO sectie ( cod_sectie, nume) 
VALUES ($cod, '$n' )";

$result = $mysqli->query($sql1);

include "afisare_sectie.php";

?>
</div>
</body>
</html>
