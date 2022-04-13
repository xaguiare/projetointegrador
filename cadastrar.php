<?php include_once 'topoprod.php'; ?>

<h3>Novo Produto</h3>

<form class="formgroup" action="cadastro.php" method="post">
Nome:<br>
<input type="text" name="nome"
 id="nome" class="form-control" />
<br/>
Estoque:<br>
<input type="text" name="estoque" 
id="estoque" class="form-control" />
<br/>
Valor:<br>
<input type="text" name="valor"
 id="valor" class="form-control" />
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
Categoria:<br/>
<select name="categoria" id="categoria" class="form-control" >
    <option value="">Selecione</option>
    <option value="cobra">Cobra</option>
    <option value="inseto">Inseto</option>
    <option value="lagarto">Lagarto</option>
    <option value="tartaruga">Tartaruga</option>
</select> 
<br/>
Comentario:<br/>
<input type="text" name="comentario" id="comentario" class="form-control" /> 
<br/><br/>

<input type="submit" value="Cadastrar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-danger"/>
</form>
<?php include_once 'rodape.php'; ?>
