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
<h3>Calculadora de Arranjo e Combinação</h3>
    <label>Escolha o tipo de cálculo:</label>
    <select name="tipo_calculo">
        <option value="arranjo">Arranjo (A(n, k))</option>
        <option value="combinacao">Combinação (C(n, k))</option>
    </select><br><br>

    <label>Insira o valor de \( n \) (total de elementos):</label>
    <input type="number" name="n" min="1" required><br><br>

    <label>Insira o valor de \( k \) (elementos selecionados):</label>
    <input type="number" name="k" min="0" required><br><br>

    <input type="submit" name="calcular_arranjo_combinacao" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >voltar</button>



<?php
if (isset($_POST['calcular_arranjo_combinacao'])) {
    $tipo_calculo = $_POST['tipo_calculo'];
    $n = intval($_POST['n']);
    $k = intval($_POST['k']);

    // Validação de entrada
    if ($n < 1 || $k < 0 || $k > $n) {
        echo "<h2>Erro: Certifique-se de que \( n \geq 1 \) e \( 0 \leq k \leq n \).</h2>";
    } else {
        // Função para calcular fatorial
        function fatorial($num) {
            $resultado = 1;
            for ($i = 1; $i <= $num; $i++) {
                $resultado *= $i;
            }
            return $resultado;
        }

        // Cálculo baseado no tipo
        switch ($tipo_calculo) {
            case 'arranjo': // Arranjo: A(n, k) = n! / (n - k)!
                $resultado = fatorial($n) / fatorial($n - $k);
                echo "<h2>Arranjo:</h2>";
                echo "<p>A(\( n = $n, k = $k \)) = $resultado</p>";
                break;

            case 'combinacao': // Combinação: C(n, k) = n! / [k! * (n - k)!]
                $resultado = fatorial($n) / (fatorial($k) * fatorial($n - $k));
                echo "<h2>Combinação:</h2>";
                echo "<p>C(\( n = $n, k = $k \)) = $resultado</p>";
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