<?php

//variavel Quantidade de Repeticoes 
$qtd_carros=15;
echo'Quantidade de Carros:' . $qtd_carros;

//Venda
$venda=0;
echo'</br> VENDA se inicia do:' . $venda;

//LACO(while)
//ENQUANTO O Venda FOR MENOR OU IGUAL
//A QUANTIDADE DE CARRO REPETE
while($venda<=$qtd_carros){
    echo'</br>Repetição:' . $venda;
    $venda= $venda + 1;

    echo'</br> Quantidade de Vendas:' . $venda;

    //Se(IF) A Sombra da Divisão Por 2 For Igual 0
    if($venda==3){
        echo' [Par]';  
    } else{
        echo ' [Impar]';
    }
}

?>