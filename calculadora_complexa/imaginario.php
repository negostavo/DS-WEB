<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Completa</title>
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
        <button onclick="history.back()" name ='voltar'>voltar</button>

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

                echo "<h2><strong>Resultado: </strong> </h2><p>$resultado</p>";
            }
            ?>
        </div>
    </form>

    
    