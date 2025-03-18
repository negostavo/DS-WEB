<?php
// Inicializa as variáveis de erro
$erroCodigoProduto = $erroNomeProduto = $erroEstoque = $erroPreco = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

function validaCliente($nome, $email, $observacao) {
    
    // Validação do Nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 3) {
            $erroNome = "O campo precisa possuir no minimo 3 caracteres";
        }
    }

    // Validação do E-mail
    if (empty($email)) {
        $erroEmail = "O e-mail é obrigatório";
    } else {
        $email = limpaEntrada($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de e-mail inválido";
        }
    }

    // Validação da Observacao
    if (!empty($observacao)) {
        $observacao = limpaEntrada($observacao);
        if (strlen($observacao) > 1000) {
            $erroObservacao = "O campo não pode possuir mais do que 1000 caracteres";
        }
    }

    // Se tudo estiver correto, processa os dados
    if (empty($erroNome) && empty($erroEmail) && empty($erroObservacao)) {
        echo "Dados validados com sucesso!";
        // Aqui você pode inserir os dados no banco de dados ou realizar outra ação
        return true;
    }else{
        session_start();
        $_SESSION['erroNome'] = $erroNome;
        $_SESSION['erroEmail'] = $erroEmail;
        $_SESSION['erroObservacao'] = $erroObservacao;
        return false;
    }
}
?>