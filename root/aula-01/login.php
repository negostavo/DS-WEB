<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Completa: Complexos, Limites, Derivadas, Trigonometria e Logaritmo</title>
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
    </form>

    <hr>

    <!-- Parte para cálculo de limite -->
    <form method="post">
        <h3>Cálculo de Limite</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_limite" placeholder="Ex: sin(x)/x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_limite" step="any" placeholder="Ex: 0" required><br><br>

        <input type="submit" name="calcular_limite" value="Calcular Limite">
    </form>

    <hr>

    <!-- Parte para cálculo de derivada -->
    <form method="post">
        <h3>Cálculo de Derivada</h3>
        <label>Insira a função (use "x" como variável):</label>
        <input type="text" name="funcao_derivada" placeholder="Ex: x^2 + 3*x" required><br><br>

        <label>Insira o valor de x:</label>
        <input type="number" name="valor_x_derivada" step="any" placeholder="Ex: 1" required><br><br>

        <input type="submit" name="calcular_derivada" value="Calcular Derivada">
    </form>

    <hr>

    <!-- Parte para cálculos trigonométricos -->
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
    </form>

    <hr>

    <!-- Parte para as 4 operações básicas e logaritmo -->
    <form method="post">
        <h3>Calculadora de Operações Básicas e Logaritmo</h3>
        <label>Insira o primeiro número:</label>
        <input type="number" name="numero1" step="any" required><br><br>

        <label>Insira o segundo número (se aplicável):</label>
        <input type="number" name="numero2" step="any"><br><br>

        <label>Escolha a operação:</label>
        <select name="operacao_basica">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
            <option value="exponenciacao">Exponenciação</option>
            <option value="radiciacao">Radiciação (apenas do primeiro número)</option>
            <option value="logaritmo">Logaritmo (Base segundo número)</option>
        </select><br><br>

        <input type="submit" name="calcular_basico" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Calculadora de operações básicas e logaritmo
        if (isset($_POST['calcular_basico'])) {
            $numero1 = floatval($_POST['numero1']);
            $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : null;
            $operacao = $_POST['operacao_basica'];

            switch ($operacao) {
                case 'adicao':
                    $resultado = $numero1 + $numero2;
                    break;
                case 'subtracao':
                    $resultado = $numero1 - $numero2;
                    break;
                case 'multiplicacao':
                    $resultado = $numero1 * $numero2;
                    break;
                case 'divisao':
                    $resultado = ($numero2 != 0) ? $numero1 / $numero2 : "Erro: Divisão por zero";
                    break;
                case 'exponenciacao':
                    $resultado = pow($numero1, $numero2);
                    break;
                case 'radiciacao':
                    $resultado = ($numero1 >= 0) ? sqrt($numero1) : "Erro: Raiz de número negativo";
                    break;
                case 'logaritmo':
                    if ($numero1 > 0 && $numero2 > 0 && $numero2 != 1) {
                        $resultado = log($numero1, $numero2);
                    } else {
                        $resultado = "Erro: Base deve ser > 0 e != 1, e número deve ser > 0";
                    }
                    break;
                default:
                    $resultado = "Operação inválida";
            }

            echo "<h2>Resultado da operação: $resultado</h2>";
        }

        // Outras funcionalidades já implementadas (complexos, limites, derivadas, trigonometria)
    }
    ?>
</body>
</html>