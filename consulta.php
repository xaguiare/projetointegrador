<?php

     include_once 'topo.php';

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

        <table table class="table table-striped">

            <tr>

                <th>Especie</th>

                <th>Estoque</th>

                <th>Valor</th>

                <th>Categoria</th>

                <th>dificuldade</th>

                <th>Comentario</th>

                <th>Editar</th>

                <th>excluir</th>

            <tr>               

        <?php        

        while($linha = mysqli_fetch_array($rs)){

            ?>

            <tr>

                <td><?php echo $linha["nome"]; ?></td>

                <td><?php echo $linha["estoque"]; ?></td>

                <td><?php echo $linha["valor"]; ?></td>

                <td><?php echo $linha["categoria"]; ?></td>

                <td><?php echo $linha["dificuldade"]; ?></td>

                <td><?php echo $linha["comentario"]; ?></td>

             

                <td>

                <a href="editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">

                editar

                </a>

                </td>

                <!-- CHAMA A EXCLUSÃO-->

                 <!-- iremos codificar id na URL -->

                <td>

                <a href="excluir.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">

                       

                        excluir

                        </a></td>

        </tr>
   
        <?php      }      ?>

        </table>

        <?php

     }else{

        echo"não existe produto cadastrado";   }

     mysqli_close($con);

     include_once 'rodape.php';

     ?>