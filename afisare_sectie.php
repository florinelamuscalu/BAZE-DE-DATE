<html>
<head>
  <meta charset="utf-8">
  <title>
    Sectii
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
      <th> COD sectie</th>
      <th> Nume </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM sectie  ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["cod_sectie"]."</td>";
    echo " <td> " . $row["nume"]. "</tr></td>";
  }
  }
 else {
  echo "</table>";
}

?>
</div>
</body>
</html>