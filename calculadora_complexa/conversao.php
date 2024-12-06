<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
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
<h3>Conversor de Radianos e Graus</h3>

    <label>Escolha a conversão desejada:</label>
    <select name="tipo_conversao">
        <option value="graus_para_radianos">Graus para Radianos</option>
        <option value="radianos_para_graus">Radianos para Graus</option>
    </select><br><br>

    <label>Insira o valor:</label>
    <input type="number" name="valor" step="any" required><br><br>

    <input type="submit" name="calcular_conversao" value="Converter">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_conversao'])) {
    $tipo_conversao = $_POST['tipo_conversao'];
    $valor = floatval($_POST['valor']);
    $resultado = null;

    if ($tipo_conversao === 'graus_para_radianos') {
        // Fórmula: Radianos = Graus × π / 180
        $resultado = $valor * pi() / 180;
        echo "<h2>Conversão de Graus para Radianos:</h2>";
        echo "<p>$valor graus = $resultado radianos</p>";
    } elseif ($tipo_conversao === 'radianos_para_graus') {
        // Fórmula: Graus = Radianos × 180 / π
        $resultado = $valor * 180 / pi();
        echo "<h2>Conversão de Radianos para Graus:</h2>";
        echo "<p>$valor radianos = $resultado graus</p>";
    } else {
        echo "<h2>Erro: Conversão inválida.</h2>";
    }
}
?>
</form>
</body>
</html>