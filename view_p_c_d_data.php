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
FROM view_pacient_consultatie_diagnostic_data ";


$result = $mysqli->query($sql);

if ( $result != false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID pacient: " . $row["id_pacient"]."<br>";
    echo "Nume: " . $row["nume"]. "<br>";
    echo "Prenume: " . $row["prenume"]. "<br>";
    echo "Pret: " . $row["pret"]. "<br>";
    echo "Nume diagnostic: " . $row["nume_diagnostic"]. "<br>";
    echo "Sfarsitul diagnosticarii: " . $row["sfarsitul_diagnosticarii"]. "<br><br>";
  }
  }
 else {
  echo "0 ";
}
?>
</div>
</body>
</html>