<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Stergere
  </title>
  <link rel="stylesheet" type="text/css" href="css/style_stergere.css">
</head>
<body>
  <div class = "intoarcere" >
      <a href= "index.php">Pagina principala</a>
  </div>
<section>
  <div calss = stergere>
    <form action = "sterge.php">
      <h1> Stergeti coloana: </h1> <br>
      <h1> Tabela de unde stergeti: </h1> <br>
      <input type="text"  name="tabela"><br>
      <h1> Coloana dupa care stergeti: </h1> <br>
      <input type="text"  name="id"><br>
      <h1> Adaugati atributul coloanei dupa care vreti sa stergeti: </h1><br>
      <input type="text"  name="atribut"><br>
      <input type="submit"  value="submit"><br>
    </form>
</div>
</section>
</body>
</html>