 <!DOCTYPE html>
 <html>
   <head>
     <title></title>
   </head>
   <body>
    <script type="text/javascript">
      function buscar(){
        //Pega a pesquisa no formulario e passa como parametro 
        url = "consultaTutor.php?pesquisa="+frmTutor.pesquisa.value;
        window.location.href =  url;
      }
      function abrirCadastro(){
        window.location.href =  "frmTutor.php";
      }
    </script> 
    <?php
    include  "menu.php";
    include "conexao.php";

    //Verifica se foi passado o parametro de pesquisa
    if(isset($_GET['pesquisa'])){
      $pesquisa = $_GET['pesquisa'];
    }
    else{
       $pesquisa = "";
    }
    

    ?>  
    <div class="container">
      <div class="navbar">
        <form name="frmTutor" class="form-inline">
          <input type="text" class="form-control mr-sm-2" name="pesquisa"  placeholder="Nome ou CPF"maxlength="50"  value=<?php echo"$pesquisa"?>>
          <input type="button" name="pesquisar" class="btn btn-outline-primary" value="Pesquisar" onclick="buscar()">


        </form>
        <button type="button" class="btn btn-success rounded float-right my-2 my-sm-0" onclick="abrirCadastro()">Cadastrar Tutor</button>
      </div>
    
      <table class='table table-striped'>
        <thead class='thead-dark'>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Endereço</th>
            <th scope='col'>CPF</th>
             <th scope='col'>Editar</th>
            <th scope='col'>Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
        
        $comandoSql ="select * from tutor where cpf_tutor = '$pesquisa' or nome_tutor like '%$pesquisa%'";

        $resultado =  mysqli_query($con,$comandoSql);

        while ($dados = mysqli_fetch_assoc($resultado)) {
         $id=$dados["id_tutor"];
         $n=$dados["nome_tutor"];
         $e = $dados["endereco_tutor"];
         $c = $dados["cpf_tutor"];
         echo "
         <tr>
         <th scope='row'>$id</th>
         <td>$n</td>
         <td>$e</td>
         <td>$c</td>
         <td><a href='frmTutorEditar.php?id=$id'><img src='Imagens/editar.png' height='32px'><br></a></td>
         <td><a href='deletarTutor.php?id=$id'><img src='Imagens/excluir.png' height='32px'></a><br></td>
         </tr>
         ";

       }
       ?>

     </tbody>
   </table>
 </div>
</body>
</html>