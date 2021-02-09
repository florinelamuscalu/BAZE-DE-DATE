<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Actualizare
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_sortare.css">
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
    <div class = cautare >
 <form action = "update.php">
  <h1>Pentru tabela FISA_MEDICALA se introduce cuvantul "fisa_medicala". <br>
       Pentru tabela DETALIU_RETETA se introduce cuvantul "detaliu_reteta".<h1><br>
  <h1>Adaugati tabela:</h1><br>
  <input type="text"  name="tabela"><br>
  <h1> Adaugati coloana care o sa fie editata: </h1><br>
  <input type="text"  name="coloana"><br>
  <h1> Adaugati coloana dupa care identificati coloana editata: </h1><br>
  <input type="text"  name="coloana_e"><br>
  <h1> Adaugati atributul coloanei pentru a identifica obiectul care o sa fie editat: </h1><br>
  <input type="text"  name="atribut"><br>
  <h1> Adaugati inlocuitorul atributului: </h1><br>
  <input type="text"  name="inlocuitor"><br>
  <input type="submit"  value="Submit"><br>
</form>  
       </div>
</section>
</body>