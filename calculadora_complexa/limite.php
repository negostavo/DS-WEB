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
   <!-- Parte para cálculo de limite -->
 <form method="post">
        <h3>Cálculo de Limite</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_limite" placeholder="Ex: sin(x)/x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_limite" step="any" placeholder="Ex: 0" required><br><br>

        <input type="submit" name="calcular_limite" value="Calcular Limite">
        <a><button onclick="history.back()" name = 'voltar'>voltar</button></a>
        <div>
            <?php
            if (isset($_POST['calcular_limite'])) {
                $funcao = $_POST['funcao_limite'];
                $valor_x = floatval($_POST['valor_x_limite']);

                try {
                    eval("\$limite = (" . str_replace('x', $valor_x, $funcao) . ");");
                    echo "<p><strong>Resultado:</strong> O limite da função $funcao quando x → $valor_x é $limite</p>";
                } catch (Throwable $e) {
                    echo "<h2><strong>Erro:</strong> Verifique a função.</h2>";
                }
            }
            ?>
            
        </div>
    </form> 
</body>
</html>
