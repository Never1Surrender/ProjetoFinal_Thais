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
        <h3>Cadastro Animal</h3>
        <form name="frmAnimal" action="cadastraAnimal.php" method="post">
          <label for="nome" ><b>Nome</b></label><br>
          <input type="text" name="nome"  placeholder="Nome" class="form-control" maxlength="50"><br>
          <label for="nasc" ><b>Data de Nascimento</b></label><br>
          <input type="text" name="nasc"  placeholder="DD/MM/AAAA" class="form-control" maxlength="10"><br>
          <label for="peso" ><b>Peso</b></label><br>
          <input type="number" name="peso" min="0.000" step="0.001" placeholder="0.000" class="form-control">
          <?php
           include "listaTutor.php";
           select_tutor();
          ?>
          <label for="especie"><b>Espécie</b></label><br>
          <input type="radio" name="especie" id="especie" value="cachorro" /> <img src="Imagens/cachorro.png" height="32px">
          <input type="radio" name="especie" id="especie" value="gato" /> <img src="Imagens/gato.png" height="32px">
          <input type="radio" name="especie" id="especie" value="passaro" /> <img src="Imagens/passaro.png" height="32px"><br> 
          <label for="porte"><b>Porte</b></label><br>
          <input type="radio" name="porte" id="porte" value="P" />Pequeno
          <input type="radio" name="porte" id="porte" value="M" />Médio
          <input type="radio" name="porte" id="porte" value="G" />Grande<br>
          <br><input type="submit" name="cadastrar" class="btn btn-outline-success" value="Cadastrar">
        </form>
      </div>
   </body>
 </html>