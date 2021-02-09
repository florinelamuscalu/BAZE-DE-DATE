<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Pacienti
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


$sql = "SELECT * FROM alergii ";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Numar pacientii care nu sunt alergici: " . $row["count(id_pacient)"]."<br>";
    echo " Alergii: " . $row["alergii"]. "<br><br>";
  }
  }
 else {
  echo "0 results";
}
?>
</div>
</body>
</html>