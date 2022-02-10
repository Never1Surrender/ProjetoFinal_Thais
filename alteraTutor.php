<!DOCTYPE html>
 <html>
   <head>
     <title></title>
   </head>
   <body>
      <?php
         include  "menu.php";
      ?>  
      <div class="container">
        <?php
         /*Pegando os dados*/
         $id = $_POST['id'];
         $n = $_POST['nome'];
         $e = $_POST['endereco'];
         $c = $_POST['cpf'];

         //Conexão
         include("conexao.php");

         //Criar comandosql
         $comandoSql = "update tutor set nome_tutor = '$n', endereco_tutor ='$e', cpf_tutor = '$c' where id_tutor = $id";
         //Executar comando
         $resultado = mysqli_query($con, $comandoSql);
         echo "<center style='margin-top: 20%;'>";
         if($resultado == true){
          echo "<img src='Imagens/ok.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Alterado com sucesso!</h3>";
         }
         else{
          echo "<img src='Imagens/erro.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Não foi possivel fazer a alteração!</h3>";
         }
         echo "<a href ='consultaTutor.php?pesquisa='> <button  type='button' class='btn btn-outline-success'>Voltar</button> </a>" ;
         echo "</center>";
        ?>

      </div>
   </body>
 </html>