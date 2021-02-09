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

$id = $_GET["id_diagnostic"];
$n = $_GET['nume'];
$d = $_GET["data_diagnosticarii"];
$s = $_GET["sfarsitul_diagnosticarii"];

 
echo "<h2> Adauga un nou diagnostic $id $n $d $s </h2><br>";

$sql1 = "INSERT INTO diagnostic ( id_diagnostic, nume, data_diagnosticarii, sfarsitul_diagnosticarii) 
VALUES ($id, '$n', '$d','$s' )";

$result = $mysqli->query($sql1);

include "afisare_diagnostic.php";

?>
</div>
</body>
</html>
