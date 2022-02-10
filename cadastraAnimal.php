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

         //Conexão
         include("conexao.php");

         //Criar comandosql
         $comandoSql = "insert into animal (nome_animal, especie_animal, porte_animal, peso_animal, nasc_animal, cod_tutor) values ('$n','$e','$pt',$ps,'$nc',$t)";

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
        echo "<a href ='consultaAnimal.php'> <button  type='button' class='btn btn-outline-success'>Voltar</button> </a>" ;
        echo "</center>";
        
        ?>
      </div>
   </body>
 </html>