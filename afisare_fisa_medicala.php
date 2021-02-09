<html>
<head>
  <meta charset="utf-8">
  <title>
    Fisa Medicala
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
      <th> ID fisa_medicala </th>
      <th> ID pacient </th>
      <th> Numele rude </th>
      <th> Alergii </th>
      <th> Numar telefon ruda </th>
      <th> Timp </th>
      <th> Frecventa </th>
      <th> Motiv </th>
    </tr>
<?php

// afisarea valorilor
include "db_conect.php";

$sql = "SELECT * FROM fisa_medicala";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id_fisa_medicala"]."</td>";
    echo "<td> " . $row["id_pacient"]."</td>";
    echo "<td> " . $row["nume_ruda"]. "</td>";
    echo "<td> " . $row["alergii"]." </td>";
    echo "<td>  " . $row["nr_telefon_ruda"]. "</td>";
    echo "<td> " . $row["timp"]. "</td>";
    echo "<td> " . $row["frecventa"]. "</td>";
    echo "<td>  " . $row["motiv"]. "</tr></td>";
  }
  }
 else {
  echo "/table";
}

?>
</div>
</body>
</html>
