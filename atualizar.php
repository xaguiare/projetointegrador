<?php

// Pegar dados da tela
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
$dificuldade = $_POST["dificuldade"];
$comentario = $_POST["comentario"];;
$id = $_POST["id"];;


// Abrir conexão com banco
include_once 'conexao.php';

//Montar a instrução de atualizar
$sql ="update produto set nome = '".$nome."',estoque = '".$estoque."',valor = '".$valor."',categoria = '".$categoria."' ,dificuldade = '".$dificuldade."' ,comentario = '".$comentario."' where idproduto =".$id;


//executar
$rs = mysqli_query($con,$sql);
if($rs){
    //echo"Atualizado com sucesso!";
$msg= "Atualizado com sucessso";
}else{
    //echo"Erro ao atualizar..";
    $msg= "Erro ao atualizar";
}


//Fechar conexao com o banco

mysqli_close($con);
echo"<script>alert('".$msg."');
location.href='consulta.php';
</script>";

include_once 'rodape.php';

?>