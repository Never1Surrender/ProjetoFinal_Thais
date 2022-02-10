 <!DOCTYPE html>
 <html>
   <head>
     <title></title>
   </head>
   <body>
    <script type="text/javascript">
      function buscar(){
        //Pega a pesquisa no formulario e passa como parametro 
        url = "consultaAnimal.php?especie="+frmAnimal.especie.value;
        window.location.href =  url;
      }
      function abrirCadastro(){
        window.location.href =  "frmAnimal.php";
      }
    </script> 
    <?php
    include  "menu.php";
    include "conexao.php";
    if(isset($_GET['especie'])){
      $especie = $_GET['especie'];
    }
    else{
     $especie = "";
    }
    
    ?>  
    <div class="container">
      <div class="navbar">
        <form name="frmAnimal" class="form-inline">
          <select name='especie' id='tutor' class='custom-select my-1 mr-sm-2'>
           <option value='' <?php if($especie == ""){echo "selected=selected";} ?>>Todos</option>
           <option value='cachorro' <?php if($especie == "cachorro"){echo "selected=selected";} ?>>Cachorro</option>
           <option value='gato' <?php if($especie == "gato"){echo "selected=selected";} ?>>Gato</option>
           <option value='passaro' <?php if($especie == "passaro"){echo "selected=selected";} ?>>Pássaro</option>
          </select>
          <input type="button" name="pesquisar" class="btn btn-outline-primary" value="Pesquisar" onclick="buscar()">


        </form>
        <button type="button" class="btn btn-success rounded float-right my-2 my-sm-0" onclick="abrirCadastro()">Cadastrar Animal</button>
      </div>
    
      <table class='table table-striped'>
        <thead class='thead-dark'>
          <tr>
            <th scope='col'>Espécie</th>
            <th scope='col'>Nome Animal</th>
            <th scope='col'>Tutor</th>
            <th scope='col'>CPF</th>
             <th scope='col'>Editar</th>
            <th scope='col'>Excluir</th>
          </tr>
        </thead>
        <tbody>
        <?php
        //Verificando se tem alguma especie sendo pesquisada
        if($especie != ""){
          $comandoSql ="select a.id_animal, a.especie_animal, a.nome_animal, t.nome_tutor, t.cpf_tutor from tutor t join animal a on a.cod_tutor = t.id_tutor where a.especie_animal = '$especie'";
        }
        else{
         $comandoSql ="select a.id_animal, a.especie_animal, a.nome_animal, t.nome_tutor, t.cpf_tutor from tutor t join animal a on a.cod_tutor = t.id_tutor";
       }
    
        
        

        $resultado =  mysqli_query($con,$comandoSql);

        while ($dados = mysqli_fetch_assoc($resultado)) {
         $id = $dados["id_animal"];
         $e=$dados["especie_animal"];
         $na=$dados["nome_animal"];
         $nt=$dados["nome_tutor"];
         $c = $dados["cpf_tutor"];
         echo "
         <tr>
         <th><img src='Imagens/$e.png' height='32px'></th>
         <td>$na</td>
         <td>$nt</td>
         <td>$c</td>
         <td><a href='frmAnimalEditar.php?id=$id'><img src='Imagens/editar.png' height='32px'><br></a></td>
         <td><a href='deletarAnimal.php?id=$id'><img src='Imagens/excluir.png' height='32px'></a><br></td>
         </tr>
         ";

       }
       ?>

     </tbody>
   </table>
 </div>
</body>
</html>