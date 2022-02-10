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
         $n = $_POST['nome'];
         $e = $_POST['especie'];
         $pt = $_POST['porte'];
         $ps = $_POST['peso'];
         $nc = $_POST['nasc'];
         $t = $_POST['tutor'];
         $id = $_POST['id'];


         //Conexão
         include("conexao.php");

         //Criar comandosql
         $comandoSql = "update animal set nome_animal ='$n', especie_animal='$e', porte_animal ='$pt', peso_animal =$ps, nasc_animal ='$nc', cod_tutor=$t where id_animal = $id";
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
         echo "<a href ='consultaAnimal.php'> <button  type='button' class='btn btn-outline-success'>Voltar</button> </a>" ;
         echo "</center>";
        ?>

      </div>
   </body>
 </html>