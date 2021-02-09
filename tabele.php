<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
   Sortare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_tabele.css">
</head>
<body>
  <div class = "intoarcere" >
     <a href= "index.php">Pagina principala</a>
  </div>
<div class=cheie>
<?php
// Cautare 

include "db_conect.php";

$sort = $_GET["sortare"];
$col = $_GET["coloana"];
$mod = $_GET["da"];
 
// echo "<h2> Alege tabela din care vrei sa sortezi $sort </h2>";

// $sql = "SELECT * FROM $sort order by $col";

// $sql = "SELECT * FROM pacient order by id_pacient";

if ( $mod == 'asc')
$sql = "SELECT * FROM $sort order by $col  asc";
else 
  if ( $mod == 'desc')
$sql = "SELECT * FROM $sort order by $col  desc";
 else 
  echo "Termen adaugat gresit";

$result = $mysqli->query($sql);

if ($result != false && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    print '<pre>';
     print_r ($row);
    print '<pre>';
  }

} 
else {

  echo "0 ";
}
?>
</div>
</body>
</html>
