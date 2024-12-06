<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros</title>
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
<h3>Calculadora de Juros Simples e Compostos</h3>
    <label>Escolha o tipo de cálculo:</label>
    <select name="tipo_juros">
        <option value="simples">Juros Simples</option>
        <option value="compostos">Juros Compostos</option>
    </select><br><br>

    <label>Capital Inicial (R$):</label>
    <input type="number" name="capital" step="any" required><br><br>

    <label>Taxa de Juros (% ao mês ou período):</label>
    <input type="number" name="taxa" step="any" required><br><br>

    <label>Tempo (em meses ou períodos):</label>
    <input type="number" name="tempo" step="1" required><br><br>

    <input type="submit" name="calcular_juros" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_juros'])) {
    $tipo_juros = $_POST['tipo_juros'];
    $capital = floatval($_POST['capital']);
    $taxa = floatval($_POST['taxa']) / 100; // Convertendo a taxa para decimal
    $tempo = intval($_POST['tempo']);

    if ($tempo < 1 || $capital < 0 || $taxa < 0) {
        echo "<h2>Erro: Os valores devem ser positivos e o tempo maior ou igual a 1.</h2>";
    } else {
        switch ($tipo_juros) {
            case 'simples': // Juros Simples
                $juros = $capital * $taxa * $tempo; // Fórmula: J = C * i * t
                $montante = $capital + $juros; // Montante = Capital + Juros
                echo "<h2>Juros Simples:</h2>";
                echo "<p>Juros: R$ " . number_format($juros, 2, ',', '.') . "</p>";
                echo "<p>Montante: R$ " . number_format($montante, 2, ',', '.') . "</p>";
                break;

            case 'compostos': // Juros Compostos
                $montante = $capital * pow(1 + $taxa, $tempo); // Fórmula: M = C * (1 + i)^t
                $juros = $montante - $capital; // Juros = Montante - Capital
                echo "<h2>Juros Compostos:</h2>";
                echo "<p>Juros: R$ " . number_format($juros, 2, ',', '.') . "</p>";
                echo "<p>Montante: R$ " . number_format($montante, 2, ',', '.') . "</p>";
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