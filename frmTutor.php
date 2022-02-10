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
        <h3>Cadastro Tutor</h3>
        <form name="frmTutor" action="cadastraTutor.php" method="post">
          <label for="nome" ><b>Nome</b></label><br>
          <input type="text" name="nome"  placeholder="Nome" class="form-control" maxlength="50"><br>
          <label for="endereco" ><b>Endereço</b></label><br>
          <input type="text" name="endereco"  placeholder="Endereço" class="form-control" maxlength="50"><br>
          <label for="cpf" ><b>CPF</b></label><br>
          <input type="text" name="cpf"  placeholder="00000000000" class="form-control" maxlength="11"><br><br>
          <input type="submit" name="cadastrar" class="btn btn-outline-success" value="Cadastrar">
        </form>
      </div>
   </body>
 </html>