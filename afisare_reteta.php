<html>
<head>
  <meta charset="utf-8">
  <title>
    Retete
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
      <th> ID reteta </th>
      <th> ID diagnostic</th>
      <th> Perioada </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM reteta  ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id_reteta"]."</td>";
    echo "<td> " . $row["id_diagnostic"]."</td>";
    echo "<td>" . $row["perioada"]. "</tr></td>";
  }
  }
 else {
  echo "0 results";
}

?>
</div>
</body>
</html>