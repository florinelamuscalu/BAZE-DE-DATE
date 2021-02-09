<html>
<head>
  <meta charset="utf-8">
  <title>
    Consultatie
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
      <th> ID consultatie </th>
      <th> ID pacient </th>
      <th> ID medic </th>
      <th> ID diagnostic </th>
      <th> Pret </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM consultatie ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id_consultatie"]."</td>";
    echo "<td>" . $row["id_pacient"]. "</td>";
    echo "<td> " . $row["id_medic"]." </td>";
    echo "<td> " . $row["id_diagnostic"]. "</td>";
    echo "<td>  " . $row["pret"]. "</td></tr>";
  }
  }
 else {
  echo "</table>";
}

?>
</div>
</body>
</html>