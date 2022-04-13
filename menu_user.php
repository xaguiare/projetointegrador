<?php

     include_once 'topouser.php';

     echo"<h1>Consultar Produto</h1>";
    echo"<script> function excluir(id){
        if (confirm('Deseja realmente excluir produto?')){
            location.href='excluir.php?id='+id;}
        }
        </script>";
     include_once 'conexao.php';   

     $sql = "select * from produto ORDER BY nome ASC";    

     $rs = mysqli_query($con,$sql);    

     if(mysqli_num_rows($rs) > 0){

        ?>
        <input id="myInput" type="text" placeholder="Search..">
        <br><br>
    <div class="table-responsive-sm">
        <table table class="table table-striped">
            <thead>
                <tr>
                <th>Especie</th>

<th>Estoque</th>

<th>Categoria</th>

<th>dificuldade</th>

<th>Comentario</th>

<th>Valor</th>



                </tr>
            </thead>  
           
        <?php        

        while($linha = mysqli_fetch_array($rs)){

            ?>
            <tbody id="myTable">
            <tr>

                <td><?php echo $linha["nome"]; ?></td>

                <td><?php echo $linha["estoque"]; ?></td>

                <td><?php echo $linha["categoria"]; ?></td>

                <td><?php echo $linha["dificuldade"]; ?></td>

                <td><?php echo $linha["comentario"]; ?></td>

                <td><?php echo $linha["valor"]; ?></td>

             

                
        <?php      }      ?>

        </table>

        <?php

     }else{

        echo"não existe produto cadastrado";   }

     mysqli_close($con);

     include_once 'rodape.php';

     ?>
   