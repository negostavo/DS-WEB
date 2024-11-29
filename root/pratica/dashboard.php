<?php
session_start();


if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: index.php"); 
    exit();
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo!</h1>

   
    <form action="Logout.php" method="post">
        <button type="submit">Logout</button>
    </form>

    
    <form action="cookie.php" method="post">
        <button type="submit">Salvar Cookie</button>
    </form>
</body>
</html>
