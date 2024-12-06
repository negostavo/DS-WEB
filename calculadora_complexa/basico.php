<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Básico</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="botao.css">
<nav class="menu">
  <ul>
    <li><a href="index.php">Principal</a></li>
    <li><a href="#services">Ajuda</a></li>
    <li><a href="#services">Redes</a></li>

  </ul>
</nav>
</head>
<body>

<form method="post">
<h3>Calculadora de Operações Básicas e Logaritmo</h3>
    <label>Insira o primeiro número:</label>
    <input type="number" name="numero1" step="any" required><br><br>

    <label>Insira o segundo número (se aplicável):</label>
    <input type="number" name="numero2" step="any"><br><br>

    <label>Escolha a operação:</label>
    <select name="operacao_basica">
        <option value="adicao">Adição</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
        <option value="exponenciacao">Exponenciação</option>
        <option value="radiciacao">Radiciação (apenas do primeiro número)</option>
        <option value="logaritmo">Logaritmo (Base segundo número)</option>
    </select><br><br>

    <input type="submit" name="calcular_basico" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_basico'])) {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : null;
    $operacao = $_POST['operacao_basica'];

    switch ($operacao) {
        case 'adicao':
            $resultado = $numero1 + $numero2;
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            break;
        case 'divisao':
            $resultado = ($numero2 != 0) ? $numero1 / $numero2 : "Erro: Divisão por zero";
            break;
        case 'exponenciacao':
            $resultado = pow($numero1, $numero2);
            break;
        case 'radiciacao':
            $resultado = ($numero1 >= 0) ? sqrt($numero1) : "Erro: Raiz de número negativo";
            break;
        case 'logaritmo':
            if ($numero1 > 0 && $numero2 > 0 && $numero2 != 1) {
                $resultado = log($numero1, $numero2);
            } else {
                $resultado = "Erro: Base deve ser > 0 e != 1, e número deve ser > 0";
            }
            break;
        default:
            $resultado = "Operação inválida";
    }
    echo "<h2Resultado da operação:</h2>";
    echo "<p> $resultado</p>";
}
?>
</form>
</body>
</html>