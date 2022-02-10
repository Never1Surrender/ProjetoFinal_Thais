 <!DOCTYPE html>
 <html>
   <head>
     <title></title>
    
   </head>
   <body>
     <?php
     include "menu.php";
     include "conexao.php";

     //Recebendo por parametro o id do tutor
     $id = $_GET['id'];

    //Criar comandosql
     $comandoSql = "select * from tutor where id_tutor = $id";

    //Executar comando
     $resultado = mysqli_query($con, $comandoSql);

     while ($dados = mysqli_fetch_assoc($resultado)) {
       $id=$dados["id_tutor"];
       $n=$dados["nome_tutor"];
       $e = $dados["endereco_tutor"];
       $c = $dados["cpf_tutor"];
     }
     ?>
      <div class="container">
        <h3>Cadastro Tutor</h3>
        <form name="frmTutor" action="alteraTutor.php" method="post">
           <input type="hidden" name="id" value="<?php echo"$id" ?>"> 
          <label for="nome" >Nome</label><br>
          <input type="text" name="nome"  placeholder="Nome" class="form-control" maxlength="50" value="<?php echo "$n"?>"><br>
          <label for="endereco" >Endereço</label><br>
          <input type="text" name="endereco"  placeholder="Endereço" class="form-control" maxlength="50"  value="<?php echo "$e"?>"><br>
          <label for="cpf" >CPF</label><br>
          <input type="text" name="cpf"  placeholder="00000000000" class="form-control" maxlength="11" value="<?php echo "$c"?>"><br><br>
          <input type="submit" name="alterar" class="btn btn-outline-success" value="Alterar">
        </form>
      </div>
   </body>
 </html>