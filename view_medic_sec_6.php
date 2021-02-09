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
FROM view_medic_sectie_6 ";


$result = $mysqli->query($sql);

if ( $result != false &&  $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID medic: " . $row["id_medic"]."<br>";
    echo "Nume: " . $row["nume"]. "<br>";
    echo "Prenume: " . $row["prenume"]. "<br>";
    echo "Email: " . $row["email"]. "<br>";
    echo "Nr telefon: " . $row["nr_telefon"]. "<br>";
    echo "Salariu: " . $row["salary"]. "<br>";
    echo "ID sectie: " . $row["cod_sectie"]. "<br>";
    echo "Nume sectie: " . $row["nume_sectie"]. "<br><br>";
  }
  }
 else {
  echo "0 ";
}
?>
</div>
</body>
</html>