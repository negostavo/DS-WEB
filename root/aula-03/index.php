<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    


    <form method="post">

    <h1 class="titulo">formulário</h1>

        <label><h3>Aluno:</h3></label>
        <input type="text" name="Aluno" id= "aluno" required>

        <br><br>
        <label><h3>RM</h3></label>
        <input type="number" name="RM"  id= "rm" required >
        <br><br>

        <label><h3>Patrimonio da máquina</h3></label>
        <input type="number" name="Patrimonio" id= "patri"  required>

        <br><br>
        <label><h3>Número da chamada:</h3></label>
        <input type="number" name="numero da chamada" id= "chamada"  required >
        <br><br>

        <br><br>
        <label><h3>Service tag (st)</h3></label>
        <input type="number" name="service tag" id= "st"  required >
        <br><br>

        <br><br>
        <label><h3>Foto</h3></label>
        <button><input type="file" name="foto da maquina" id= "foto"  required > </button>
        <br><br>

        <button type="submit" name="cadastrar">Cadastrar</button>
        <button type = "resete" name = "resetar">Limpar</button>

    </form>



</body>
</html>