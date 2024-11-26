<?php

include_once("array.php");

$variaveltexto = "arthur";
 
if(is_array($estado)){
   echo "é uma array".'<br>';
}else{
   echo "nao é uma array".'<br>';
}


//exemplo de uo array_unshift()

array_unshift($estado,"Rio Grande do Sul");
array_push($estado,"Paraná");


foreach($estado as $estadoLinha){
    echo 'Estado: ' .$estadoLinha.'<br>'.'<br>'.'<br>'.'<br>';
}

//exemplo de uo array_shift()

$removido = array_shift($estado);
echo $removido.'<br>';



$removido = array_pop($estado);

echo $removido.'<br>'.'<br>'.'<br>';


//Exemplo de uso do in_array

if(in_array("São Paulo",$estado)){

    echo "Estado encontrado".'<br>';

}
//Exemplo do array_key_exists
if(array_key_exists('SP', $estadoChave )){

    echo "Chave encontrada";

}
?>