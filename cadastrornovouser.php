<?php include_once 'topocadastro.php';

// 1 resgatar os dados vindo do formulário

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$ibge = $_POST["ibge"];
// 2 abrir a conexão com o banco de dados
include_once 'conexao.php';

// 3 montar a instrução para gravar no banco.
$sql ="INSERT INTO usuario VALUES(null,'$nome','$login','$senha','user','$cep','$rua','$bairro','$cidade','$uf',$ibge)";

// 4 gravar  --> resultado é boolean  se ok true..... se deu ruim false
$result = mysqli_query($con,$sql); 

if($result){
  echo  $msg= "Gravado com sucesso!";
}else{
 echo   $msg= "Erro ao Gravar!";
}

// 5 fechar a conexão com o banco
mysqli_close($con);

/*echo"<script>alert('".$msg."');

location.href='index.php';

 </script>";*/
 

include_once 'rodape.php';

?>
