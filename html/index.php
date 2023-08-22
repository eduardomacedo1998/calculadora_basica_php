<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<section>


<form action="./index.php" method="post">

<label for="numero1">Numero 1 </label>
<input type="text" name="numero1" id="numero1" placeholder="numero 1">

<label for="numero2">Numero 2 </label>
<input type="text" name="numero2" id="numero2" placeholder="numero 2">

<label for="operacao">Escolha a operação:</label>
<select name="operacao" id="operacao">
    <option value="soma">Adição</option>
    <option value="subtracao">Subtração</option>
    <option value="multiplicacao">Multiplicação</option>
    <option value="divisao">Divisão</option>
</select>

<button type="submit">calcular</button>
</form>

</body>
</html>

<h2><?php include_once "../php/calculos.php";?></h2>



</section>














</body>
</html>