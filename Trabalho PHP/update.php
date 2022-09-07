<?php
     require('conexao.php');
     $id= $_POST['id'];
     $descricao= $_POST['descricao'];
     $marca= $_POST['marca'];
     $estoque= $_POST['estoque'];
     $valor=$_POST['valor'];

     mysqli_query($conexao, "UPDATE produtos set 
          descricao='$descricao', marca='$marca', estoque='$estoque', valor='$valor' where id=$id ");
     
     mysqli_close($conexao);
?>
<a href="select.php" class="btn btn-primary">Produtos</a>s