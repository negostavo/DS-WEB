<div class="container">
    <form action="cadastrar" method="POST" enctype="multipart/form-data" onsubmit="return validarFormulario()">
        <label>Nome do Produto:</label>
        <input type="text" name="nomeProduto" id="nomeProduto">
        <br>
        <label>Preço:</label>
        <input type="number" name="precoProduto" id="precoProduto">
        <br>
        <label>Estoque:</label>
        <input type="number" name="estoqueProduto" id="estoqueProduto">
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<script>
    function validarFormulario() {
        const nomeProduto = document.getElementById('nomeProduto').value;
        const precoProduto = document.getElementById('precoProduto').value;
        const estoqueProduto = document.getElementById('estoqueProduto').value;

        if (nomeProduto.trim() === '') {
            alert('Por favor, preencha o nome do produto.');
            return false; 
        }

        if (precoProduto === '' || isNaN(precoProduto) || parseFloat(precoProduto) <= 0) {
            alert('Por favor, insira um preço válido e maior que zero.');
            return false;
        }

        if (estoqueProduto === '' || isNaN(estoqueProduto) || parseInt(estoqueProduto) < 0) {
            alert('Por favor, insira uma quantidade de estoque válida e maior que 0.');
            return false;
        }

        return true; 
    }
</script>