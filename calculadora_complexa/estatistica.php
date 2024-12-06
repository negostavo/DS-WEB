<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatistica</title>
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
<h3>Cálculo Estatístico</h3>
    <label>Escolha o tipo de cálculo:</label>
    <select name="tipo_calculo">
        <option value="media_simples">Média Simples</option>
        <option value="media_ponderada">Média Ponderada</option>
        <option value="moda">Moda</option>
        <option value="mediana">Mediana</option>
        <option value="variancia">Variância</option>
        <option value="desvio_padrao">Desvio Padrão</option>
    </select><br><br>

    <label>Insira os números separados por vírgulas:</label>
    <input type="text" name="valores" placeholder="Ex: 1, 2, 3, 4" required><br><br>

    <div id="pesos" style="display: none;">
        <label>Insira os pesos separados por vírgulas (apenas para Média Ponderada):</label>
        <input type="text" name="pesos" placeholder="Ex: 2, 3, 1, 4"><br><br>
    </div>

    <input type="submit" name="calcular_estatistica" value="Calcular">
    <button onclick="history.back()" name = 'voltar' >Undo</button>



<script>
    // Mostra ou oculta o campo de pesos para Média Ponderada
    document.querySelector('select[name="tipo_calculo"]').addEventListener('change', function () {
        const pesos = document.getElementById('pesos');
        if (this.value === 'media_ponderada') {
            pesos.style.display = 'block';
        } else {
            pesos.style.display = 'none';
        }
    });
</script>

<?php
if (isset($_POST['calcular_estatistica'])) {
    $tipo_calculo = $_POST['tipo_calculo'];
    $valores = array_map('floatval', explode(',', $_POST['valores']));
    $resultado = null;

    switch ($tipo_calculo) {
        case 'media_simples':
            // Média Simples
            $resultado = array_sum($valores) / count($valores);
            echo "<h2>Média Simples: </h2><p>$resultado</p>";
            break;

        case 'media_ponderada':
            // Média Ponderada
            if (isset($_POST['pesos']) && !empty($_POST['pesos'])) {
                $pesos = array_map('floatval', explode(',', $_POST['pesos']));
                if (count($valores) !== count($pesos)) {
                    echo "<h2>Erro: O número de valores e pesos deve ser o mesmo.</h2>";
                    break;
                }
                $soma_ponderada = 0;
                $soma_pesos = 0;
                foreach ($valores as $i => $valor) {
                    $soma_ponderada += $valor * $pesos[$i];
                    $soma_pesos += $pesos[$i];
                }
                $resultado = $soma_ponderada / $soma_pesos;
                echo "<h2>Média Ponderada: </h2><p>$resultado</p>";
            } else {
                echo "<h2>Erro: Insira os pesos para calcular a média ponderada.</h2>";
            }
            break;

        case 'moda':
            // Moda
            $frequencias = array_count_values($valores);
            $max_frequencia = max($frequencias);
            $moda = array_keys($frequencias, $max_frequencia);
            $resultado = implode(', ', $moda);
            echo "<h2>Moda: </h2><p>$resultado</p>";
            break;

        case 'mediana':
            // Mediana
            sort($valores);
            $n = count($valores);
            if ($n % 2 == 0) {
                $mediana = ($valores[$n / 2 - 1] + $valores[$n / 2]) / 2;
            } else {
                $mediana = $valores[floor($n / 2)];
            }
            $resultado = $mediana;
            echo "<h2>Mediana: </h2><p> $resultado</p>";
            break;

        case 'variancia':
            // Variância
            $media = array_sum($valores) / count($valores);
            $soma_diferencas = 0;
            foreach ($valores as $valor) {
                $soma_diferencas += pow($valor - $media, 2);
            }
            $resultado = $soma_diferencas / count($valores);
            echo "<h2>Variância: </h2><p>$resultado</p>";
            break;

        case 'desvio_padrao':
            // Desvio Padrão
            $media = array_sum($valores) / count($valores);
            $soma_diferencas = 0;
            foreach ($valores as $valor) {
                $soma_diferencas += pow($valor - $media, 2);
            }
            $variancia = $soma_diferencas / count($valores);
            $resultado = sqrt($variancia);
            echo "<h2>Desvio Padrão: </h2><p>$resultado</p>";
            break;

        default:
            echo "<h2>Erro: Tipo de cálculo inválido.</h2>";
    }
}
?>
</form>
</body>
</html>