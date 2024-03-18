<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {
        $v1 = $_GET['nome'];
    echo "Bem vindo " .$v1. "!";
	//código aqui

    }
    ?>
</body>
</html>