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
         $e = $_POST['endereco'];
         $c = $_POST['cpf'];

         //Conexão
         include("conexao.php");

         //Criar comandosql
         $comandoSql = "insert into tutor (nome_tutor, endereco_tutor, cpf_tutor) values ('$n','$e','$c')";

         //Executar comando
         $resultado = mysqli_query($con, $comandoSql);

         echo "<center style='margin-top: 20%;'>";
         if($resultado == true){
          echo "<img src='Imagens/ok.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Cadastrado com sucesso!</h3>";
        }
        else{
          echo "<img src='Imagens/erro.png' height='125px'><br>";
          echo "<h3 style ='color: gray'> Não foi possivel fazer o  cadastro!</h3>";
        }
        echo "<a href ='consultaTutor.php?pesquisa='> <button  type='button' class='btn btn-outline-success'>Voltar</button> </a>" ;
        echo "</center>";
        
        ?>
      </div>
   </body>
 </html>