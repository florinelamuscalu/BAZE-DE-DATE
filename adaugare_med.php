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

$id = $_GET["id_medicament"];
$n = $_GET["nume"];
$f = $_GET["forma_farmaceutica"];
 
echo "<h2> Adauga medicament $id $n $f </h2><br>";

$sql1 = "INSERT INTO medicament ( id_medicament, nume, forma_farmaceutica) 
VALUES ($id, '$n', '$f')";

$result = $mysqli->query($sql1);

include "afisare_medicament.php";

?>
</div>
</body>
</html>
