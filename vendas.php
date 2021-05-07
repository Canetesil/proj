<?php
include('conexao.php');

$idprodutos = $_GET['idprodutos'];

$sql="SELECT * from tblprodutos where idprodutos='$idprodutos'";

$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idprodutos = $linha['idprodutos'];
$produto    = $linha['produto'];
$estoque   = $linha['estoque'];
$estoquemax = $linha['estoquemax'];
$estoquemin = $linha['estoquemin'];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <hr>
<form action="" method="post" >
ID   <input type="text" name="idprodutos" value="<?php echo $idprodutos ?>"readonly> <br>
NOME   <input type="text" name="produto" value="<?php echo $produto ?>"> <br>
ESTOQUE <input type="text" name="estoque" value="<?php echo $estoque ?>"> <br>
MAX <input type="text" name="estoquemax" value="<?php echo $estoquemax ?>"> <br>
MIN <input type="text" name="estoquemin" value="<?php echo $estoquemin ?>">  
<input type="submit" value="Vender"> 


</body>
</html>