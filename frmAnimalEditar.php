 <!DOCTYPE html>
 <html>
   <head>
     <title></title>
    
   </head>
   <body>
    <?php
    include "menu.php";
    include "conexao.php";

    //Recebendo o parametro do id do animal
    $id = $_GET['id'];

    //Criar comandosql
    $comandoSql = "select * from animal where id_animal = $id";

    //Executar comando
    $resultado = mysqli_query($con, $comandoSql);

    while ($dados = mysqli_fetch_assoc($resultado)) {
     $id = $dados["id_animal"];
     $e=$dados["especie_animal"];
     $n=$dados["nome_animal"];
     $pt=$dados["porte_animal"];
     $ps=$dados["peso_animal"];
     $nc =$dados["nasc_animal"];
     $t=$dados["cod_tutor"];
   }
   ?>
      <div class="container">
        <h3>Cadastro Animal</h3>
        <form name="frmAnimal" action="alteraAnimal.php" method="post">
          <input type="hidden" name="id" value="<?php echo"$id" ?>"> 
          <label for="nome" ><b>Nome</b></label><br>
          <input type="text" name="nome"  placeholder="Nome" class="form-control" maxlength="50" value="<?php echo"$n" ?>"><br>
          <label for="nasc" ><b>Data de Nascimento</b></label><br>
          <input type="text" name="nasc"  placeholder="DD/MM/AAAA" class="form-control" maxlength="10" value="<?php echo"$nc" ?>"><br>
          <label for="peso" ><b>Peso</b></label><br>
          <input type="number" name="peso" min="0.000" step="0.001" placeholder="0.000" class="form-control" value="<?php echo"$ps" ?>">
          <?php
           include "listaTutor.php";
           select_tutorbyID($t);
          ?>
          <label for="especie"><b>Espécie</b></label><br>
          <input type="radio" name="especie" id="especie" value="cachorro" <?php if($e == "cachorro"){echo"checked='checked'";} ?> /> <img src="Imagens/cachorro.png" height="32px">
          <input type="radio" name="especie" id="especie" value="gato" <?php if($e == "gato"){echo"checked='checked'";} ?> /> <img src="Imagens/gato.png" height="32px">
          <input type="radio" name="especie" id="especie" value="passaro" <?php if($e == "passaro"){echo"checked='checked'";} ?>/> <img src="Imagens/passaro.png" height="32px"><br> 
          <label for="porte"><b>Porte</b></label><br>
          <input type="radio" name="porte" id="porte" value="P" <?php if($pt == "P"){echo"checked='checked' ";} ?> />Pequeno
          <input type="radio" name="porte" id="porte" value="M" <?php if($pt == "M"){echo"checked='checked'";} ?>/>Médio
          <input type="radio" name="porte" id="porte" value="G" <?php if($pt == "G"){echo"checked='checked'";} ?>/>Grande<br>
          <br><input type="submit" name="cadastrar" class="btn btn-outline-success" value="Cadastrar">
        </form>
      </div>
   </body>
 </html>