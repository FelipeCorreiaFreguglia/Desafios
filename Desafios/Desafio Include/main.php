<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio com Include</title>
</head>
<body>
   
    <h2>Desafio com Include</h2>
    <?php
    $num1 = "2";
    $num2 = "2";
    include 'function.php';
	//Apenas atribuir valores às variáveis

    echo "<p>A soma de $num1 e $num2 é: " . calcularSoma($num1, $num2) . "</p>";
    ?>
</body>
</html>