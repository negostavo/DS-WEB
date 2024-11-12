

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$usuarioCorreto = 'aluno';
$senhaCorreta = 'sesi';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario !== $usuarioCorreto) {
        echo "Usuário incorreto";
    } elseif ($senha !== $senhaCorreta) {
        echo "Senha incorreta";
    } else {
        echo "Bem-vindo, $usuario!";
    }
}


?>

<a href="javascript:history.back()">voltar</a>

</body>
</html>