<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'] )) {
        $v1 = $_POST['username'];
        $v2 = $_POST['password'];
    if($v1 === "admin" && $v2 === "admin123"){
 
        echo "Login bem-sucedito!";
	//Código aqui
	}
    else{
        echo "A tentativa de login falhou.";
    }
}
    ?>
</body>
</html>
