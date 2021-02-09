<html>
<head>
  <meta charset="utf-8">
  <title>
    Diagnostic
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
      <th> ID diagnostic </th>
      <th> Nume </th>
      <th> Data diagnosticarii </th>
      <th> Sfarsitul diagnosticarii </th>
    </tr>
<?php

// afisarea valorilor

include "db_conect.php";

$sql = "SELECT * FROM diagnostic ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id_diagnostic"]."</td>";
    echo "<td>" . $row["nume"]. "</td>";
    echo "<td>" . $row["data_diagnosticarii"]." </td>";
    echo "<td> " . $row["sfarsitul_diagnosticarii"]. "</tr></td>";
  }
  }
 else {
  echo "</table>";
}

?>
</div>
</body>
</html>