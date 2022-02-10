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
         //Recebendo o id por parametro que sera deletado
         $id = $_GET['id'];

         //Conexão
         include("conexao.php");

         //Criar comandosql
         $comandoSql = "delete from animal where id_animal = $id";

         //Executar comando
         $resultado = mysqli_query($con, $comandoSql);

         echo "<center style='margin-top: 20%;'>";
         if($resultado == true){
          echo "<img src='Imagens/excluir.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Deletado com sucesso!</h3>";
        }
        else{
          echo "<img src='Imagens/erro.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Não foi possivel deletar esse cadastro!</h3>";
        }
        echo "<a href ='consultaAnimal.php'> <button  type='button' class='btn btn-outline-success'>Voltar</button> </a>" ;
        echo "</center>";
        
        ?>
      </div>
   </body>
 </html>