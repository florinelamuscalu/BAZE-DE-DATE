<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    GRUP
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_grup.css">
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
  <div class=grup>
<?php

// afisarea care foloseste functii grup

include "db_conect.php";

echo "<h2> Afiseaza sectile in care lucreaza mai multi medici si au salariul mai mare 10000</h2>";

$sql = "SELECT count(id_medic), id_medic, m.nume, cod_sectie, sum(salary)
from medic m join sectie s using (cod_sectie)
group by s.nume
having count(id_medic)>1 and sum(salary)>10000;";

$result = $mysqli->query($sql);

if ( $result != false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Numar medici pe sectie: " . $row["count(id_medic)"]."<br>";
    echo "ID medic: " . $row["id_medic"] . "<br>";
    echo " Nume: " . $row["nume"]. "<br>";
    echo "ID sectie: " . $row["cod_sectie"]." <br>";
    echo " Salariu total pe sectie: " . $row["sum(salary)"]. "<br><br>";
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