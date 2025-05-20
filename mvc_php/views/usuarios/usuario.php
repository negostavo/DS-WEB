<?php
    
    extract($dados);
    echo $nomeUsuario;
?>

<div class="container">
    
    <div class="formulario">
       <div class="div-photo">
            <img src="<?=!empty($nomeUsuario) ? "./photos/".$fotoUsuario : "./photos/user.png";?>" alt="Imagem de perfil do usuário" class="photo-user" id="previewImagem">
            <p>Recomenda-se uma imagem de dimensão 200x200</p>
        </div>
        <form action="usuario" method="POST" name="formulario" enctype="multipart/form-data">

            <label for="nome">Nome: </label>
            <input type="text" name="nomeUsuario" id="nome" value="<?=isset($nomeUsuario) ? $nomeUsuario : "";?>" disabled>
        
            <label for="email">E-mail: </label>
            <input type="text" name="emailUsuario" id="email" value="<?=isset($emailUsuario) ? $emailUsuario : "";?>" disabled>

            <label for="senha">Senha: </label>
            <input type="password" name="senhaUsuario" id="senha" value="<?=isset($senhaUsuario) ? $senhaUsuario : "";?>" disabled>
            
            <label for="fotoUsuario">Foto de Perfil:</label>
            <input type="file" name="fotoUsuario" id="fotoUsuario"  onchange="alterarImagem(this)" disabled>

            
            <input type="submit">

        </form>
    </div>
</div>
<div class="div-button-edit">
<button class="button-edit" onclick="habilitarEdicao()">Habilitar Edição</button>
</div>
<script>
    var verificador = 1
    function habilitarEdicao(){
        var campos = document.querySelectorAll("input")
        if(verificador == 1){
            verificador = 0
            var texto = "Desabilitar Edição"
        }else{
            verificador = 1
            var texto = "Habilitar Edição"
        }
        document.getElementsByClassName("button-edit")[0].innerHTML = texto
        campos.forEach(campo => {
            campo.disabled = verificador;
        });
    }
    function alterarImagem(imagem){
        console.log(imagem);
        const img =  document.getElementById("previewImagem");
        const file = imagem.files[0];
        if (file) img.src = URL.createObjectURL(file);
    }
</script>