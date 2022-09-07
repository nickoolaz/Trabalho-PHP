 <?php
    require('conexao.php');
    $id=$_GET['id'];
    
    mysqli_query($conexao,"DELETE from produtos where id=$id");

    mysqli_close($conexao);
 
 ?>
 <a href="select.php" class="btn btn-primary">Produtos</a>                 