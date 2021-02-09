<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Cheie
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_tabele.css">
</head>
<body>
	<div class= cheie>
<?php
// Update

include "db_conect.php";

$tab = $_GET["tabela"];
$col = $_GET["coloana"];
$col_t = $_GET["coloana_e"];
$at = $_GET["atribut"];
$chestie = $_GET["inlocuitor"];


echo "<h2> Actualizati tabela $tab, in care colonana $col se inlocuieste cu $chestie cand $col_t = $at </h2>";

$sql = "UPDATE $tab SET $col = '$chestie' WHERE $col_t = $at ";

// $sql = "UPDATE fisa_medicala SET nume_ruda = Petrache Ionut WHERE id_fisa_medicala = '3' ";

$result = $mysqli->query($sql);

if ($result === TRUE) {
  echo "A reusit actualizarea <br>";
} else {
  echo "Incearca mai tarziu <br>";
}

include "afisare_$tab.php";

?>
</div>
</body>
</html>



