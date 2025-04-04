var cliente = []
var msgAviso = "";
var produtos = []
var valorTotalCarrinho = 0
var quantidadeTotalCarrinho = 0



function selecionaCliente(id, nome){
    cliente["id"] = id
    cliente["nome"] = nome
    msgAviso = "Aviso: Cliente selecionado"
    atualizaCarrinho()
}


function atualizaCliente(){
    dadosCliente = document.getElementById("dadosCliente")
    dadosCliente.innerHTML = "Cliente: " + cliente["nome"]
}

function atualizaProduto(){
    // Reseta os totais antes do cálculo
    quantidadeTotalCarrinho = 0;
    valorTotalCarrinho = 0; // <- ADICIONADO AQUI

    // Obtém a referência da tabela do carrinho
    let tabela = document.getElementById("tabelaCarrinho");

    // Percorre os produtos e calcula os totais corretamente
    produtos.forEach(produto => {
        quantidadeTotalCarrinho += produto.quantidade;
        valorTotalCarrinho += produto.preco * produto.quantidade;

        // Cria a linha da tabela
        let adicionaLinha = document.createElement("tr");
        let adicionaCodigo = document.createElement("td");
        adicionaCodigo.textContent = produto.codigo;
        let adicionaNome = document.createElement("td");
        adicionaNome.textContent = produto.nome;
        let adicionaPreco = document.createElement("td");
        adicionaPreco.textContent = "R$" + produto.preco.toFixed(2);
        let adicionaQuantidade = document.createElement("td");
        adicionaQuantidade.innerHTML = `
            <i onclick="quantidadeProduto(${produto.id}, -1)" class="fa-solid fa-minus"></i> 
            ${produto.quantidade} 
            <i onclick="quantidadeProduto(${produto.id}, 1)" class="fa-solid fa-plus"></i>`;
        let adicionaTotal = document.createElement("td");
        adicionaTotal.textContent = "R$" + (produto.preco * produto.quantidade).toFixed(2);
        let adicionaExcluir = document.createElement("td");
        adicionaExcluir.innerHTML = `<i onclick="excluirProduto(${produto.id})" class="fa-solid fa-trash"></i>`;

        adicionaLinha.appendChild(adicionaCodigo);
        adicionaLinha.appendChild(adicionaNome);
        adicionaLinha.appendChild(adicionaPreco);
        adicionaLinha.appendChild(adicionaQuantidade);
        adicionaLinha.appendChild(adicionaTotal);
        adicionaLinha.appendChild(adicionaExcluir);

        tabela.appendChild(adicionaLinha);
    });
}



function quantidadeProduto(id,quantidade){

    if (produtos[id].quantidade + quantidade >= 1 && produtos[id].quantidade + quantidade <= produtos[id].estoque) {
        produtos[id].quantidade += quantidade;
        atualizaCarrinho();
    }
}


function excluirProduto(id){
    delete produtos[id]
    atualizaCarrinho()  

}


function selecionaProduto(id, nome, codigo, estoque, preco){
    produtos[id] = {
        "id" : id,
        "nome" : nome,
        "codigo" : codigo,
        "estoque" : estoque,
        "preco" : preco,
        "quantidade" : 1
        
    }
    atualizaCarrinho()
    
}


function atualizaCarrinho(){
//Exibe o aviso
    aviso = document.getElementById("aviso")
    aviso.innerHTML = msgAviso
//Exibe o Cliente
    atualizaCliente()

//Cria o cabecalho do carrinho
    tabela = document.getElementById("tabelaCarrinho")
    tabela.innerHTML = "";

    adicionaLinha = document.createElement("tr");
    adicionaCabecalho = document.createElement("th");
    adicionaCabecalho.setAttribute("colspan","6");
    adicionaCabecalho.textContent = "Carrinho"

    adicionaLinha.appendChild(adicionaCabecalho)
    tabela.appendChild(adicionaLinha)

//CRIAR CABEÇALHO DOS PRODUTOS
    adicionaLinha = document.createElement("tr");
    adicionaCodigo = document.createElement("th");
    adicionaCodigo.textContent = "Codigo";
    adicionaNome = document.createElement("th");
    adicionaNome.textContent = "Nome";
    adicionaPreco = document.createElement("th");
    adicionaPreco.textContent = "Preço";
    adicionaQuantidade = document.createElement("th");
    adicionaQuantidade.textContent = "Quantidade";
    adicionaTotal = document.createElement('th');
    adicionaTotal.textContent = "Total Produto";
    adicionaExcluir = document.createElement("th");
    adicionaExcluir.textContent = "Excluir";

    adicionaLinha.appendChild(adicionaCodigo)
    adicionaLinha.appendChild(adicionaNome)
    adicionaLinha.appendChild(adicionaPreco)
    adicionaLinha.appendChild(adicionaQuantidade)
    adicionaLinha.appendChild(adicionaTotal)
    adicionaLinha.appendChild(adicionaExcluir)
    

    tabela.appendChild(adicionaLinha)
    
//ATUALIZAR PRODUTOS
    atualizaProduto();
    
   //Exibe calculo do valor total 
   
   adicionaTexto = document.createElement("span")
   adicionaTexto.setAttribute("class","totalCarrinho")
   adicionaTexto.textContent = "Valor toal do carrinho R$ "+ valorTotalCarrinho.toFixed(2);
   
   

   //Exibe botao para enviar os dados
   

   adicionaBotao = document.createElement ("button")
   adicionaBotao.setAttribute("onclick","finalizaVenda()")
   adicionaBotao.textContent = "Registrar Venda"


   rodapeCarrinho = document.getElementById("rodapeCarrinho")
   rodapeCarrinho.innerHTML=""
   rodapeCarrinho.appendChild(adicionaTexto)
   rodapeCarrinho.appendChild(adicionaBotao)
}
async function finalizaVenda(){
    try{
        const dados = {
            cliente: {
                idCliente : cliente["id"],
                nomeCliente : cliente["nome"]
            },
            produtos: Object.values(produtos) //importante, pega os dados sem a estrutura 
        }
        console.log(dados);
        let response = await fetch("./venda/vendaPost.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(dados)
        });

        let data = await response.text();
        console.log("Post criado:", data);
    }catch(error){
        console.error("Erro ao criar post:", error);
    }
}


