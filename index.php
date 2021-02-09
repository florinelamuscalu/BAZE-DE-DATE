<html>
<head>
	<meta charset="utf-8">
	<title>
		INTERFATA BAZE DE DATE
	</title>
	<link rel="stylesheet" type="text/css" href="css/1stil.css">
</head>

<body >


   <div class = afisare>
	<h2> Afisarea tabelelor </h2>
        <a href="afisare_pacient.php">  Afisare Pacienti  </a><br>
        <a href="afisare_fisa_medicala.php">  Afisare Fisa medicala  </a><br>
        <a href="afisare_medic.php">  Afisare Medic </a><br>
        <a href="afisare_sectie.php">  Afisare Sectii  </a><br>
        <a href="afisare_consultatie.php">  Afisare Consultatii  </a><br>
        <a href="afisare_diagnostic.php">  Afisare Diagnostice  </a><br>
        <a href="afisare_reteta.php">  Afisare Retete  </a><br>
        <a href="afisare_medicament.php">  Afisare Medicamente  </a><br>
        <a href="afisare_detaliu_reteta.php">  Afisare Detalii retete  </a><br>
</div>
<div class = link>
	<h2>Modificari tabela</h2>
	    <a href = "sortare.php"> Sortare </a><br>
	    <a href = "actualizare.php"> Actualizare </a><br>
        <a href = "stergere.php"> Stergere </a><br>
        <a href="inserare.php">  Inserare  </a><br>
      <!--  <a href="cautare_dupa_cheie.php">  Cautare  </a><br> -->
	    <a href="afisare_din_mai_multe_tabele.php"> Join</a><br>
        <a href="afisare_in_grupuri.php">  Functii grup  </a><br>

</div>
<div class = view>
	<h2> Vizualizarile tabelelor</h2>
		<a href = view_alergii_complexa.php> Vizualizare complexa alergii </a><br>
		<a href = view_diag.php > Vizualizare complexa afisare datele diagnosticelor distincte </a><br>
		<a href = view_medic_sec_6.php> Vizualizare compusa medici sectia 6 </a><br>
		<a href = view_p_c_d_data.php > Vizualizare compusa pacientii diagnosticatii in aceasi zi </a><br>
		<a href = view_f_p_c_d.php > Vizualizare compusa istoricul bolii</a><br>
    </h2>
</div>

<?php

include "db_conect.php";

$mysqli->close();

?>
</body>
</html>
