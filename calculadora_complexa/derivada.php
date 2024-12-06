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
    
  
  <!-- Parte para cálculo de derivada -->
  <form method="post">
        <h3>Cálculo de Derivada</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_derivada" placeholder="Ex: x^2 + 3*x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_derivada" step="any" placeholder="Ex: 1" required><br><br>

        <input type="submit" name="calcular_derivada" value="Calcular Derivada">
        <button onclick="history.back()" name= 'voltar'>voltar</button>
        <div>
            <?php
            if (isset($_POST['calcular_derivada'])) {
                $funcao = $_POST['funcao_derivada'];
                $valor_x = floatval($_POST['valor_x_derivada']);
                $h = 1e-5; 

                try {
                    $funcao_h = str_replace('x', "($valor_x + $h)", $funcao);
                    $funcao_x = str_replace('x', $valor_x, $funcao);
                    eval("\$fxh = $funcao_h;");
                    eval("\$fx = $funcao_x;");
                    $derivada = ($fxh - $fx) / $h;
                    echo "<p><strong>Resultado:</strong> A derivada da função $funcao no ponto x = $valor_x é $derivada</p>";
                } catch (Throwable $e) {
                    echo "<p><strong>Erro:</strong> Verifique a função.</p>";
                }
            }
            ?>
           
        </div>
    </form>
</body>
</html>