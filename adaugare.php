<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Inserare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_adaug.css">
</head>
<body>
  <div class = adaugare>
<?php
// Inserare

include "db_conect.php";

$tabela = $_GET["nume"];

$add_pacient_nume =  $_GET["nume"];
$add_pacient_prenume =  $_GET["prenume"];
$add_pacient_email =  $_GET["email"];
$add_pacient_nr_telefon =  $_GET["nr_telefon"];
$add_pacient_loc_de_munca =  $_GET["loc_de_munca"];
$add_pacient_data_nasterii =  $_GET["data_nasterii"];


 
echo "<h2> Adauga un nou pacient: $add_pacient_nume $add_pacient_prenume $add_pacient_email $add_pacient_nr_telefon $add_pacient_loc_de_munca $add_pacient_data_nasterii </h2><br>";

$sql1 = "INSERT INTO pacient ( id_pacient, nume, prenume, email, nr_telefon, loc_de_munca, data_nasterii) VALUES (13, '$add_pacient_nume', '$add_pacient_prenume', '$add_pacient_email', '$add_pacient_nr_telefon', '$add_pacient_loc_de_munca', '$add_pacient_data_nasterii' )";

$result = $mysqli->query($sql1);
include "afisare_pacient.php";

?>
</div>
</body>
</html>
