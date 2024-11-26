<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Completa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora Completa</h1>
    
    <!-- Parte para números complexos -->
    <form method="post">
        <h3>Insira o primeiro número complexo (retangular):</h3>
        <label>Parte real:</label>
        <input type="number" name="real1" step="any"><br><br>
        
        <label>Parte imaginária:</label>
        <input type="number" name="imag1" step="any"><br><br>
        
        <h3>Insira o segundo número complexo (retangular):</h3>
        <label>Parte real:</label>
        <input type="number" name="real2" step="any"><br><br>
        
        <label>Parte imaginária:</label>
        <input type="number" name="imag2" step="any"><br><br>

        <label>Escolha a operação:</label>
        <select name="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
            <option value="modulo">Módulo (primeiro número)</option>
            <option value="polar">Forma Polar (primeiro número)</option>
        </select><br><br>
        
        <input type="submit" name="calcular" value="Calcular">
        <div>
            <?php
            if (isset($_POST['calcular'])) {
                $real1 = floatval($_POST['real1']);
                $imag1 = floatval($_POST['imag1']);
                $real2 = floatval($_POST['real2']);
                $imag2 = floatval($_POST['imag2']);
                $operacao = $_POST['operacao'];

                function adicionar($real1, $imag1, $real2, $imag2) {
                    $real = $real1 + $real2;
                    $imag = $imag1 + $imag2;
                    return "{$real} + {$imag}i";
                }

                function subtrair($real1, $imag1, $real2, $imag2) {
                    $real = $real1 - $real2;
                    $imag = $imag1 - $imag2;
                    return "{$real} + {$imag}i";
                }

                function multiplicar($real1, $imag1, $real2, $imag2) {
                    $real = $real1 * $real2 - $imag1 * $imag2;
                    $imag = $real1 * $imag2 + $imag1 * $real2;
                    return "{$real} + {$imag}i";
                }

                function dividir($real1, $imag1, $real2, $imag2) {
                    $denominador = $real2 * $real2 + $imag2 * $imag2;
                    if ($denominador == 0) {
                        return "Erro: Divisão por zero";
                    }
                    $real = ($real1 * $real2 + $imag1 * $imag2) / $denominador;
                    $imag = ($imag1 * $real2 - $real1 * $imag2) / $denominador;
                    return "{$real} + {$imag}i";
                }

                function modulo($real, $imag) {
                    return sqrt($real * $real + $imag * $imag);
                }

                function forma_polar($real, $imag) {
                    $modulo = modulo($real, $imag);
                    $angulo = atan2($imag, $real);
                    return "{$modulo} * e^(i * {$angulo})";
                }

                switch ($operacao) {
                    case 'adicao':
                        $resultado = adicionar($real1, $imag1, $real2, $imag2);
                        break;
                    case 'subtracao':
                        $resultado = subtrair($real1, $imag1, $real2, $imag2);
                        break;
                    case 'multiplicacao':
                        $resultado = multiplicar($real1, $imag1, $real2, $imag2);
                        break;
                    case 'divisao':
                        $resultado = dividir($real1, $imag1, $real2, $imag2);
                        break;
                    case 'modulo':
                        $resultado = modulo($real1, $imag1);
                        break;
                    case 'polar':
                        $resultado = forma_polar($real1, $imag1);
                        break;
                    default:
                        $resultado = "Operação inválida";
                }

                echo "<p><strong>Resultado:</strong> $resultado</p>";
            }
            ?>
        </div>
    </form>

    <!-- Parte para cálculo de limite -->
    <form method="post">
        <h3>Cálculo de Limite</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_limite" placeholder="Ex: sin(x)/x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_limite" step="any" placeholder="Ex: 0" required><br><br>

        <input type="submit" name="calcular_limite" value="Calcular Limite">
        <div>
            <?php
            if (isset($_POST['calcular_limite'])) {
                $funcao = $_POST['funcao_limite'];
                $valor_x = floatval($_POST['valor_x_limite']);

                try {
                    eval("\$limite = (" . str_replace('x', $valor_x, $funcao) . ");");
                    echo "<p><strong>Resultado:</strong> O limite da função $funcao quando x → $valor_x é $limite</p>";
                } catch (Throwable $e) {
                    echo "<p><strong>Erro:</strong> Verifique a função.</p>";
                }
            }
            ?>
        </div>
    </form>

    <!-- Parte para cálculo de derivada -->
    <form method="post">
        <h3>Cálculo de Derivada</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_derivada" placeholder="Ex: x^2 + 3*x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_derivada" step="any" placeholder="Ex: 1" required><br><br>

        <input type="submit" name="calcular_derivada" value="Calcular Derivada">
        <div>
            <?php
            if (isset($_POST['calcular_derivada'])) {
                $funcao = $_POST['funcao_derivada'];
                $valor_x = floatval($_POST['valor_x_derivada']);
                $h = 1e-5; // Pequeno incremento

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

                echo "<p><strong>Resultado:</strong> O valor da função no ponto x = $x é $resultado</p>";
            }
            ?>
        </div>
    </form>
</body>
</html>
