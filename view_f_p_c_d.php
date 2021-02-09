<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    View
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_afis_view.css">
</head>
<body>
  <div class = "intoarcere" >
    <nav>
      <ul>
        <li><a href= "index.php">Pagina principala</a></li>
      </ul>
    </nav>
  </div>
<div class = afisview>
<?php

// afisarea valorilor
include "db_conect.php";


$sql = "SELECT * 
FROM F_M_PACIENT_CONSULTATIE_DIAGNOSTIC ";


$result = $mysqli->query($sql);

if ( $result != false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID fisa: " . $row["id_fisa_medicala"]."<br>";
    echo "Durata: " . $row["timp"]. "<br>";
    echo "Frecventa: " . $row["frecventa"]. "<br>";
    echo "Motiv: " . $row["motiv"]. "<br>";
    echo "Nume pacient: " . $row["nume"]. "<br>";
    echo "Prenume pacient: " . $row["prenume"]. "<br>";
    echo "Nume diagnostic: " . $row["nume_diag"]. "<br><br>";
  }
  }
 else {
  echo "0 ";
}
?>
</div>
</body>
</html>