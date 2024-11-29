<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    if (isset($_SESSION['username'])) {
       
        setcookie("username", $_SESSION['username'], time() + (7 * 24 * 60 * 60), "/");
        echo "Cookie salvo com sucesso!";

    } else {
        header("Location: index.php");
        exit();
    }
}
?>
