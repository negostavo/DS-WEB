<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressão</title>
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
<h3>Progressão Aritmética (PA) e Progressão Geométrica (PG)</h3>
    <label>Escolha o tipo de progressão:</label>
    <select name="tipo_progressao">
        <option value="pa">Progressão Aritmética (PA)</option>
        <option value="pg">Progressão Geométrica (PG)</option>
    </select><br><br>

    <!-- Inputs comuns -->
    <label>Termo inicial (a₁):</label>
    <input type="number" name="termo_inicial" step="any" required><br><br>

    <label>Razão (r):</label>
    <input type="number" name="razao" step="any" required><br><br>

    <label>Número de termos (n):</label>
    <input type="number" name="numero_termos" step="1" min="1" required><br><br>

    <input type="submit" name="calcular_progressao" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_progressao'])) {
    $tipo_progressao = $_POST['tipo_progressao'];
    $a1 = floatval($_POST['termo_inicial']); // Primeiro termo
    $r = floatval($_POST['razao']); // Razão
    $n = intval($_POST['numero_termos']); // Número de termos

    $resultados = []; // Armazena os termos da progressão

    if ($n < 1) {
        echo "<h2>Erro: O número de termos deve ser maior ou igual a 1.</h2>";
    } else {
        switch ($tipo_progressao) {
            case 'pa': // Progressão Aritmética
                for ($i = 0; $i < $n; $i++) {
                    $resultados[] = $a1 + $i * $r; // Fórmula: aₙ = a₁ + (n - 1)r
                }
                echo "<h2>Progressão Aritmética (PA):</h2>";
                echo "<p>Termos: " . implode(", ", $resultados) . "</p>";
                break;

            case 'pg': // Progressão Geométrica
                for ($i = 0; $i < $n; $i++) {
                    $resultados[] = $a1 * pow($r, $i); // Fórmula: aₙ = a₁ * rⁿ⁻¹
                }
                echo "<h2>Progressão Geométrica (PG):</h2>";
                echo "<p>Termos: " . implode(", ", $resultados) . "</p>";
                break;

            default:
                echo "<h2>Erro: Tipo de progressão inválido.</h2>";
        }
    }
}
?>
</form>
</body>
</html>