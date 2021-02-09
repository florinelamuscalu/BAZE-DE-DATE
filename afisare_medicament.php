<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Medicamente
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_afis.css">
</head>
<body>
  <div class = "intoarcere" >
    <nav>
      <ul>
        <li><a href= "index.php">Pagina principala</a></li>
      </ul>
    </nav>
  </div>
<div class = afis>
    <table >
    <tr>
      <th> ID medicament </th>
      <th> Nume </th>
      <th> Forma farmaceutica </th>
    </tr>
<?php

// afisarea valorilor
include "db_conect.php";

$sql = "SELECT * FROM medicament ";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id_medicament"]."</td>";
    echo "<td> " . $row["nume"]. "</td>";
    echo "<td> " . $row["forma_farmaceutica"]." </tr></td>";
  }
  }
 else {
  echo "</table>";
}
?>
</div>
</body>
</html>