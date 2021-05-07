<?php
include('conexao.php');
$sql = "select * from tblprodutos";
$qry = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <hr>
    
    <table border='1'>
   
   
   <tr> 
   <td>ID</td>
   <td>Nome</td>
   <td>Estoque</td>
   <td>Max</td>
   <td>MIN</td>
   <td>Ações</td>
</tr>

<?php
while($linha=mysqli_fetch_array($qry)){
    
    echo "<tr>";
    echo "<td>".$linha['idprodutos']."</td>";
    echo "<td>".$linha['produto']."</td>";
    echo "<td>".$linha['estoque']."</td>";
    echo "<td>".$linha['estoquemax']."</td>";
    echo "<td>".$linha['estoquemin']."</td>";
    
    echo "
    <td>
     <a href='editar.php?idprodutos={$linha["idprodutos"]}'>Editar</a> |
     <a href='excluir.php?idprodutos={$linha["idprodutos"]}'>Excluir</a>
     <a href='vendas.php?idprodutos={$linha["idprodutos"]}'>Vender</a>
     </td>
     ";

    echo "</tr>";
}

?>



</body>
</html>