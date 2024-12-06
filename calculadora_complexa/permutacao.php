<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
<h3>Calculadora de Permutação e Permutação Circular</h3>
    <label>Escolha o tipo de cálculo:</label>
    <select name="tipo_permutacao">
        <option value="permutacao">Permutação</option>
        <option value="permutacao_circular">Permutação Circular</option>
    </select><br><br>

    <label>Insira o valor de \( n \) (total de elementos):</label>
    <input type="number" name="n" min="1" required><br><br>

    <input type="submit" name="calcular_permutacao" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_permutacao'])) {
    $tipo_permutacao = $_POST['tipo_permutacao'];
    $n = intval($_POST['n']);

    if ($n < 1) {
        echo "<h2>Erro: O valor de \( n \) deve ser maior ou igual a 1.</h2>";
    } else {
        // Função para calcular fatorial
        function fatorial($num) {
            $resultado = 1;
            for ($i = 1; $i <= $num; $i++) {
                $resultado *= $i;
            }
            return $resultado;
        }

        switch ($tipo_permutacao) {
            case 'permutacao': // Permutação: n!
                $resultado = fatorial($n);
                echo "<h2>Permutação:</h2>";
                echo "<p>Total de permutações possíveis: $resultado</p>";
                break;

            case 'permutacao_circular': // Permutação Circular: (n - 1)!
                if ($n == 1) {
                    $resultado = 1; // Apenas 1 disposição circular para n = 1
                } else {
                    $resultado = fatorial($n - 1);
                }
                echo "<h2>Permutação Circular:</h2>";
                echo "<p>Total de disposições circulares possíveis: $resultado</p>";
                break;

            default:
                echo "<h2>Erro: Tipo de cálculo inválido.</h2>";
        }
    }
}
?> 
</form>
</body>
</html>