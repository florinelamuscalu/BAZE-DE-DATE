<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Pacienti
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
      <th> ID pacient </th>
      <th> Nume </th>
      <th> Prenume </th>
      <th> Data nasterii </th>
      <th> Email </th>
      <th> Nr telefon </th>
      <th> Loc de munca </th>
    </tr>
<?php

// afisarea valorilor
include "db_conect.php";


$sql = "SELECT * FROM pacient";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc() ) {
    echo "<tr><td>". $row["id_pacient"]. "</td>";
    echo "<td>".$row["nume"] ."</td>";
    echo "<td>". $row["prenume"]. "</td>";
    echo "<td>". $row["data_nasterii"]."</td>";
    echo"<td>".$row["email"]. "</td>";
    echo "<td>". $row["nr_telefon"]. "</td>";
    echo"<td>". $row["loc_de_munca"]. "</td></tr>";
  }
   echo "</table>";
  }
 else {
  echo "0 results";
}
?>
</table>
</div>
</body>
</html>