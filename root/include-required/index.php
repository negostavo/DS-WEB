<?php

$idadeUsuario = 12;
//incluindo o cabeçalho
include ('head.html');

//incluindo o corpo
if($idadeUsuario>=16){
    include ('body.html');
}else{
    include('body-2.html');
}

//incluindo o corpo em php com required
require_once ('body.php');

//incluindo o rodapé
include ('footer.html');

?>