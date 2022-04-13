<?php include_once 'topoprod.php'; 

//resgate de dados do URL
$id = base64_decode($_GET["id"]);
//montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

//executar
$rs = mysqli_query($con,$sql);
if (mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}

?>

<h3>Atualizar Produto</h3>



<form class="formgroup" action="atualizar.php" method="post">
Nome.:<br>
<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $reg["nome"]; ?>"/>
<br/>
Estoque.:<br>
<input type="text" name="estoque" id="estoque" class="form-control"value="<?php echo $reg["estoque"]; ?>"/>
<br/>
Valor.:<br>
<input type="text" name="valor" id="valor" class="form-control"value="<?php echo $reg["valor"]; ?>"/>
<br/>

Dificuldade para criar:<br/>
<select name="dificuldade" id="dificuldade" class="form-control" >
    <option value="">Selecione</option>
    <option value="Iniciante">Iniciante</option>
    <option value="Pouco experiente">Pouco experiente</option>
    <option value="Intermediario">Intermediario</option>
    <option value="Experiente">Experiente</option>
    <option value="Especialista">Especialista</option>
</select> 
<br/>
Categoria.:<br/>
<select name="categoria" id="categoria" class"form-control">
    <option value="<?php echo $reg["categoria"]; ?>"><?php echo $reg["categoria"]; ?></option>
    <option value="cobra">Cobra</option>
    <option value="inseto">Inseto</option>
    <option value="lagarto">Lagarto</option>
    <option value="tartaruga">Tartaruga</option>
    
</select>
<br/><br/>
Comentario:<br/>
<input type="text" name="comentario" id="comentario" class="form-control" /> 
<br/><br/>
<br/><br/>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>"/>
<input type="submit" value="Atualizar Produto" class="btn btn-primary"/>
<input type="reset" value="Limpar Campos" class="btn btn-danger"/>
</form>

<?php include_once 'rodape.php'; ?>