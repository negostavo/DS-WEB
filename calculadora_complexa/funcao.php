<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
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
    

<!-- Parte para funções do primeiro e segundo grau -->
<form method="post">
        <h3>Funções do Primeiro e Segundo Grau</h3>
        <label>Tipo de função:</label>
        <select name="tipo_funcao">
            <option value="primeiro_grau">Função do Primeiro Grau (f(x) = ax + b)</option>
            <option value="segundo_grau">Função do Segundo Grau (f(x) = ax² + bx + c)</option>
        </select><br><br>

        <h4>Coeficientes:</h4>
        <label>a:</label>
        <input type="number" name="coef_a" step="any" required><br><br>

        <label>b:</label>
        <input type="number" name="coef_b" step="any" required><br><br>

        <div id="coef_c">
            <label>c:</label>
            <input type="number" name="coef_c" step="any"><br><br>
        </div>

        <label>Valor de x:</label>
        <input type="number" name="valor_x" step="any" required><br><br>

        <input type="submit" name="calcular_funcao" value="Calcular">
        <button onclick="history.back()" name ='voltar'>voltar</button>
        <div>
            <?php
            if (isset($_POST['calcular_funcao'])) {
                $tipo = $_POST['tipo_funcao'];
                $a = floatval($_POST['coef_a']);
                $b = floatval($_POST['coef_b']);
                $x = floatval($_POST['valor_x']);
                $resultado = "";

                if ($tipo === "primeiro_grau") {
                    $resultado = $a * $x + $b;
                } elseif ($tipo === "segundo_grau") {
                    $c = floatval($_POST['coef_c']);
                    $resultado = $a * $x * $x + $b * $x + $c;
                }

                echo "<h2><strong>Resultado:</strong> O valor da função no ponto x = </h2> <strong>$x</strong> <h2>é</h2> <strong>$resultado</strong>";
            }
            ?>
            
        </div>
    </form>
</body>
</html>