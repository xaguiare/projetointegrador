<?php include_once 'topo.php';

// 1 resgatar os dados vindo do formulário

$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
$dificuldade = $_POST["dificuldade"];
$comentario = $_POST["comentario"];

// 2 abrir a conexão com o banco de dados
include_once 'conexao.php';

// 3 montar a instrução para gravar no banco.
$sql ="insert into produto values(null,'".$nome."','".$estoque."','".$valor."','".$categoria."','".$dificuldade."','".$comentario."')";

// 4 gravar  --> resultado é boolean  se ok true..... se deu ruim false
$result = mysqli_query($con,$sql);

if($result){
    $msg= "Gravar com sucesso!";
}else{
    $msg= "Erro ao Gravar!";
}

// 5 fechar a conexão com o banco
mysqli_close($con);

echo"<script>alert('".$msg."');

location.href='consulta.php';

 </script>";

include_once 'rodape.php';

?>
