<!--AQUI E HTML-->

Teste

<?php

//AQUI E O PHP
    //PARA COLETAR UMA INFORMACAO ENVIADA PELO USUARIOVIA FORM
    //UTILIZAMOS O $_POST
    $var_nome=$_POST['frm_name'];
    echo $var_nome. '<br>';

    
    //PARA COLETAR UMA INFORMACAO ENVIADA PELO USUARIOVIA FORM
    //UTILIZAMOS O $_POST
    $var_idade=$_POST['frm_idade'];
    echo $var_idade . '<br>';


    //PARA COLETAR UMA INFORMACAO ENVIADA PELO USUARIOVIA FORM
    //UTILIZAMOS O $_POST
    $var_sexo=$_POST['frm_sexo'];
    echo $var_sexo. '<br>';
   


if($var_sexo=='M'){ ?>
<!-- AQUI HTML-->
<style>
     /*AQUI E CSS*/
     .caixa_exibicao{
         width: 400px;
         height:200px;
         border: solid 3px yellow;
     }

</style>

<?php
}else{
    echo'<style>
         .caixa_exibicao{
            width: 400px;
            height:200px;
            border: solid 3px pink;
         }
    
          </style>';
}

?>
<!-- AQUI HTML-->
<div class="caixa_exibicao">

<?php
  //Aqui E PHP
  echo $var_nome . '</br>';
?>

</div>
