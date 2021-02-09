<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    JOIN
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_j.css">
</head>
<body>
  <div class = "intoarcere" >
    <nav>
      <ul>
        <li><a href= "index.php">Pagina principala</a></li>
      </ul>
    </nav>
  </div>
<section>
  <div class=join>
<?php

include "db_conect.php";

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo $mysqli->host_info . "<br>";

echo "<h2>Sa se afiseze toti pacientii care au fost diagnosticati in data de 12.05.2017 cu gripa</h2><br>";

$sql = "SELECT p.id_pacient, p.nume, p.prenume
from pacient p join consultatie c on (p.id_pacient=c.id_pacient) join diagnostic d on (c.id_diagnostic=d.id_diagnostic)
where d.data_diagnosticarii = '2017-05-12' and lower (d.nume) = 'gripa' ";

$result = $mysqli->query($sql);

if ($result != false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id_pacient"]."<br>";
    echo " Nume: " . $row["nume"]. "<br>";
    echo "Prenume: " . $row["prenume"]." <br>";
  }
  }
 else {
  echo "0";
}

?>
</div>
</section>
</body>
</html>






