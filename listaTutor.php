<?php

 function select_Tutor(){
     include "conexao.php";
     echo"<br> 
        <label for='tutor'><b>Tutor</b></label>
        <select name='tutor' id='tutor' class='custom-select my-1 mr-sm-2'>
        ";
        $comandoSql ='select * from tutor';
        $resultado =  mysqli_query($con,$comandoSql);
        while ($dados = mysqli_fetch_assoc($resultado)) {
             $id=$dados["id_tutor"];
             $n=$dados["nome_tutor"];
             echo "<option value='$id'>$n</option>";
        }
        echo "</select><br>";
  }
  function select_TutorbyID($cod){
   include "conexao.php";
   echo"<br> 
   <label for='tutor'><b>Tutor</b></label>
   <select name='tutor' id='tutor' class='custom-select my-1 mr-sm-2'>
   ";
   $comandoSql ='select * from tutor';
   $resultado =  mysqli_query($con,$comandoSql);
   while ($dados = mysqli_fetch_assoc($resultado)) {
       $id=$dados["id_tutor"];
       $n=$dados["nome_tutor"];
       if($cod == $id){
          echo "<option value='$id' selected=selected>$n</option>";
      }
      else{
          echo "<option value='$id'>$n</option>";
      }

  }
  echo "</select><br>";
}
?>