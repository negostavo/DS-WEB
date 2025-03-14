//função para validação de dados do cliente
function validarDadosCliente(){

    document.getElementById('erro-nome').innerHTML = "";
    document.getElementById('erro-email').innerHTML = "";
    document.getElementById('erro-observacao').innerHTML = "";

    
    if  (formulario.nome.value.length < 3 || formulario.nome.value.length == ""){
        formulario.nome.focus();
        document.getElementById('erro-nome').innerHTML = "Verifique se o campo nome possui mais do que 2 caracteres.";


        return false;   

    } if (formulario.email.value == "" || 
    formulario.email.value.indexOf('@') == -1 || 
    formulario.email.value.indexOf('.') == -1){
    formulario.email.focus();

    document.getElementById('erro-email').innerHTML = "Peencha o campo E-mail corretamente.";

        return false;   

}   if (formulario.observacao.value.length > 1000){

    formulario.observacao.focus();
    document.getElementById('erro-observacao').innerHTML = "Exedeu a capacidade de 1000 caractere!<br>No momento possui "+formulario.observacao.value.length + " caracteres";

        return false; 

}


} 
function validarProduto() {

    document.getElementById('erro-cod').innerHTML = "";
    document.getElementById('erro-produto').innerHTML = "";
    document.getElementById('erro-estoque').innerHTML = "";
    document.getElementById('erro-preco').innerHTML = "";
    

    if (!isNaN(parseInt(cod)) ) {
        formulario.cod.focus();
        document.getElementById('erro-cod').innerHTML = "Digite valores válidos";
        return false;
    }
    
    if (formulario.produto.value.length < 3 || formulario.produto.value.length == "") {
        formulario.produto.focus();
        document.getElementById('erro-produto').innerHTML = "Insira um nome de produto válido";
        return false;
        
    }

    if (!isNaN(parseInt(estoque))) {
        formulario.estoque.focus();
        document.getElementById('erro-estoque').innerHTML = "Digite valores válidos";
        return false;
    }

    if (!isNaN(parseFloat(preco))) {
        formulario.preco.focus();
        document.getElementById('erro-preco').innerHTML = "Digite valores válidos";
        return false;
    }
}
 function validarInput() {
        let input = document.getElementById("meuInput").value;
        if (input <= 0) {
            alert("Por favor, insira um número maior que zero!");
            document.getElementById("meuInput").value = "";
                        }
    }
