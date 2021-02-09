<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Cautare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_adaug.css">
</head>
<body>
	<div class sterge>
<?php
// Stergeti

include "db_conect.php";

$nume=  $_GET["tabela"];
$col = $_GET["id"];
$sterg = $_GET ["atribut"];
 
// echo "<h2> Stergeti: $delete_sectie </h2>";

$sql = "DELETE  FROM $nume WHERE $col = $sterg";

$result = $mysqli->query($sql);

include "afisare_$nume.php";

?>
</div>
</body>
</html>
