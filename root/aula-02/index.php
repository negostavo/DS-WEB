<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <form method="post">
        <h1 class="titulo">Calculadora</h1>
        <label>Primeiro número:</label>
        <input type="number" name="primeiro"  required>

        <br><br>
        <label>Segundo número:</label>
        <input type="number" name="segundo"  required >
        <br><br>

        <label>Operação:</label>
        <select name="operação" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        
        <button type="submit" name="calcular">Calcular</button>
        <button type = "resete" name = "resetar">Limpar</button>
    

    <?php
    function soma($primeiro,$segundo){

        $resultado = $primeiro + $segundo;
        return $resultado;
    }

    function sub($primeiro,$segundo){

        $resultado = $primeiro - $segundo;
        return $resultado;
    }

    function div($primeiro,$segundo){

        $resultado = $primeiro / $segundo;
        return $resultado;
    }

    function mult($primeiro,$segundo){

        $resultado = $primeiro * $segundo;
        return $resultado;
    }


    if (isset($_POST['calcular'])) {
        $primeiro = $_POST['primeiro'];
        $segundo = $_POST['segundo'];
        $operação = $_POST['operação'];
        $resultado= 0;


        if (strlen($primeiro) <= 4 && strlen($segundo) <= 4){

            switch ($operação) {
                case 'add':
                    $resultado = soma($primeiro, $segundo);
                    break;
                case 'subtract':
                    $resultado = sub($primeiro,$segundo);
                    
                    break;
                case 'multiply':
                    $resultado = mult($primeiro,$segundo);
                    
                    break;
                case 'divide':
                    if ($segundo != 0) {
                        $resultado = div($primeiro,$segundo);
                    } else {
                        echo "<p>Erro: Divisão por zero não é permitida.</p>";
                        return;
                    }
                    break;
                default:
                    echo "<p>Operação inválida.</p>";
                    return;
            }

            echo "<h2>Resultado: $resultado
            </h2>";
        }
        else 
        echo "<p>Erro: a calculadora nao aceita mais do que 4 numeros.</p>";
    }

    ?>
    </form>
</body>
</html>
