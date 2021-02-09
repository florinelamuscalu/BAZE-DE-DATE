<html>
<head>
  <meta charset="utf-8">
  <title>
    Medici
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
      <th> ID medic </th>
      <th> COD sectie </th>
      <th> Nume </th>
      <th> Prenume </th>
      <th> Email </th>
      <th> Nr telefon </th>
      <th> Salary </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM medic ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["id_medic"]."</td>";
    echo "<td>" . $row["cod_sectie"]."</td>";
    echo "<td> " . $row["nume"]."</td>";
    echo "<td> " . $row["prenume"]."</td>";
    echo "<td>  " . $row["email"]. "</td>";
    echo "<td> " . $row["nr_telefon"]. "</td>";
    echo "<td>" . $row["salary"]."</tr></td>";
  }
  }
 else {
  echo "</table>";
}

?>
</div>
</body>
</html>