<?php

//Informacoes do banco de dados MYSQL
$sevidor ="localhost";
$login = "root";
$senha = "";

//Conectar Com o banco
//@Ignora Mensagens de Erro
@$conexao = new mysqli ($servidos,$login,$senha);

//Chegar A $conexao
if($conexao->connect_error){
    //Exibindo O Erro
    echo 'Erro na conexao:' .$conexao->connect_erro;
} else{
    //echo'Conectado com sucesso';
}
?>