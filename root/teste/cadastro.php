<?php
// Configurações de conexão ao banco de dados
$host = "localhost"; // Nome do host
$dbname = "cadastro"; // Nome do banco de dados
$username = "root"; // Usuário do banco de dados
$password = "usbw"; // usbw do banco de dados

// Conectando ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $usbw = password_hash($_POST['usbw'], PASSWORD_DEFAULT); // Hash da usbw para segurança

        // Insere os dados na tabela 'roots'
        $sql = "INSERT INTO roots (nome, login, usbw) VALUES (:nome, :login, :usbw)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':usbw', $usbw);
        
        // Executa a inserção
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
