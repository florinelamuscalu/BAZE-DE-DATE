<html>
<head>
  <meta charset="utf-8">
  <title>
    Detalii Retete
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
      <th> ID  detaliu reteta </th>
      <th> ID reteta </th>
      <th> ID medicament </th>
      <th> pret </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM detaliu_reteta  ";
$result = $mysqli->query($sql);

if ($result != false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["id_detaliu_reteta"]."</td>";
    echo "<td> " . $row["id_reteta"]."</td>";
    echo "<td> " . $row["id_medicament"]."</td>";
    echo "<td>" . $row["pret"]. "<tr><td>";
  }
  }
 else {
  echo "</table>";
}

?>
</div>
</body>
</html>
