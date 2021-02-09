<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Cheie
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_cheie.css">
</head>
<body>
  <div class = "intoarcere" >
    <nav>
      <ul>
        <li><a href= "index.php">Pagina principala</a></li>
      </ul>
    </nav>
  </div>
<div class=cheie>
	
<?php
// Cautare in baza dupa nume

include "db_conect.php";

$cheie = $_GET["cheie"];
 
echo "<h2> Afiseaza toti pacientii al caror nume incepe/contin $cheie </h2>";

$sql = "SELECT id_pacient, nume, prenume FROM PACIENT WHERE lower (nume) like '".$cheie."%' ";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_pacient"]. " - nume: " . $row["nume"]. " " . $row["prenume"]. "<br>";
  }

} 
else {
  echo "0 ";
}
?>
</div>
</body>
</html>
