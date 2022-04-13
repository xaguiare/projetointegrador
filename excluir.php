<?php

include_once 'topo.php';


// retirar a decodificação

//resgate de dados do URL
$id = base64_decode($_GET["id"]);

// Abrir conexão com banco
include_once 'conexao.php';

// Executar o comando SQL para excluir o produto da tabela produto
$sql = "DELETE FROM produto WHERE idproduto = '".$id."'";

//echo "Comando de exclusão: ".$sql;

//echo "<script>alert('Id do produto a ser excluído: ".$id."')</script>";

//executar
$rs = mysqli_query($con,$sql);
if($rs){
    $msg= "Excluído com sucessso";
}else{
    $msg= "Erro ao excluir";
}


mysqli_close($con);

echo"<script>alert('".$msg."')</script>";


include_once 'rodape.php';


/*
--OUTRO EXEMPLO DA INTERNET
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetophp";

$id = $_GET["id"];;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM produto WHERE idproduto='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
*/

?>