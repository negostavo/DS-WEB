<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trigonometria</title>
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
<h3>Cálculos Trigonométricos</h3>

    <label>Insira o valor do ângulo (em radianos):</label>
    <input type="number" name="angulo" step="any" placeholder="Ex: 1.57" required><br><br>

    <label>Escolha a operação trigonométrica:</label>
    <select name="operacao_trigonometria">
        <option value="seno">Seno</option>
        <option value="cosseno">Cosseno</option>
        <option value="tangente">Tangente</option>
        <option value="arcseno">Arcoseno</option>
        <option value="arccosseno">Arcocosseno</option>
        <option value="arctangente">Arcotangente</option>
    </select><br><br>

    <input type="submit" name="calcular_trigonometria" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<?php
if (isset($_POST['calcular_trigonometria'])) {
    $angulo = floatval($_POST['angulo']);
    $operacao = $_POST['operacao_trigonometria'];

    switch ($operacao) {
        case 'seno':
            $resultado = sin($angulo);
            break;
        case 'cosseno':
            $resultado = cos($angulo);
            break;
        case 'tangente':
            $resultado = tan($angulo);
            break;
        case 'arcseno':
            $resultado = ($angulo >= -1 && $angulo <= 1) ? asin($angulo) : "Erro: Valor fora do intervalo [-1, 1]";
            break;
        case 'arccosseno':
            $resultado = ($angulo >= -1 && $angulo <= 1) ? acos($angulo) : "Erro: Valor fora do intervalo [-1, 1]";
            break;
        case 'arctangente':
            $resultado = atan($angulo);
            break;
        default:
            $resultado = "Operação inválida";
    }

    echo "<h2>Resultado da operação trigonométrica: $resultado</h2>";
}
?>
</form>
</body>
</html>