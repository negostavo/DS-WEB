<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Científica</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="botao.css">
<nav class="menu">
  <ul>
    <li><a href="index.php">Principal</a></li>
    <li><a href="#services">Ajuda</a></li>
    <li><a href="#services">Redes</a></li>

  </ul>
</nav>
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f0ead6; /* Fundo cáqui claro */
            color: #3e3b32; /* Texto cáqui escuro */
        }
        h1 {
            margin-top: 20px;
            font-size: 2.5em;
            color: #6b705c; /* Verde-oliva suave */
            font-family: 'Playfair Display', serif;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0;
            color: #4d473b; /* Dourado suave */
        }
        .container {
            margin: 30px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        .area {
            width: 250px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        .area img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 15px 0;
        }
        .area p {
            text-align: center;
            margin-bottom: 15px;
        }
        button {
            background-color: #c2b280; /* Cáqui médio */
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Roboto', sans-serif;
        }
        button:hover {
            background-color: #a2926e; /* Cáqui mais escuro */
        }
        footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #6b705c; /* Verde-oliva suave */
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <h1>Bem-vindo à Calculadora Científica</h1>
    <p>Essa calculadora oferece funcionalidades avançadas para resolver problemas matemáticos complexos. Confira abaixo as funções disponíveis:</p>

    <div class="container">
        <div class="area">
            <p>Resolva e analise diferentes tipos de funções matemáticas.</p>
            <img src="funcao.png" alt="Função">
            <a href="funcao.php">
                <button>Função</button>
            </a>
        </div>

        <div class="area">
            <p>Calcule derivadas de funções para análise de taxas de variação.</p>
            <img src="derivada.png" alt="Derivada">
            <a href="derivada.php">
                <button>Derivada</button>
            </a>
        </div>

        <div class="area">
            <p>Encontre o limite de funções em pontos específicos.</p>
            <img src="limite.png" alt="Limite">
            <a href="limite.php">
                <button>Limite</button>
            </a>
        </div>

        <div class="area">
            <p>Trabalhe com números complexos e operações envolvendo a unidade imaginária.</p>
            <img src="complexo.png" alt="Números Imaginários">
            <a href="imaginario.php">
                <button>Números Imaginários</button>
            </a>
        </div>

        <div class="area">
            <p>Trabalhe com permutação e permutação circular, além de fatorial.</p>
            <img src="permutacao.png" alt="Números Imaginários">
            <a href="permutacao.php">
                <button>Permutação</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com arranjos e combinatorias.</p>
            <img src="arranjo.png" alt="Números Imaginários">
            <a href="arranjo.php">
                <button>Arranjos</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com os dois tipos de progessão.</p>
            <img src="progressao.png" alt="Números Imaginários">
            <a href="progressao.php">
                <button>PA e PG</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com os dois tipos de juros.</p>
            <img src="juros.png" alt="Números Imaginários">
            <a href="juros.php">
                <button>Juros</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com Trigonometria.</p>
            <img src="trigonometria.png" alt="Números Imaginários">
            <a href="trigonometria.php">
                <button>Trigonometria</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com as operações basicas.</p>
            <img src="basico.png" alt="Números Imaginários">
            <a href="basico.php">
                <button>Operações Basicas</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com conversão.</p>
            <img src="conversao.png" alt="Números Imaginários">
            <a href="conversao.php">
                <button>Conversão</button>
            </a>
        </div>
        <div class="area">
            <p>Trabalhe com análise estatística.</p>
            <img src="estatistica.png" alt="Números Imaginários">
            <a href="estatistica.php">
                <button>Estatística</button>
            </a>
        </div>
    </div>

    <footer>
        <p>© 2024 Calculadora Científica. Todos os direitos reservados.</p>
    </footer>
    
</body>
</html>

