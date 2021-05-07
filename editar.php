<?php
include('conexao.php');
$idprodutos = $_GET['idprodutos'];
//echo $idteste;

$sql="select * from tblprodutos where idprodutos='$idprodutos'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idprodutos = $linha['idprodutos'];
$produto    = $linha['produto'];
$estoque   = $linha['estoque'];
$estoquemax = $linha['estoquemax'];
$estoquemin = $linha['estoquemin'];
?>

<h1>Editar</h1>

<table border='1'>

<form action="upadateprodutos.php" method="post" >
ID   <input type="text" name="idprodutos" value="<?php echo $idprodutos ?>"readonly> <br>
NOME   <input type="text" name="produto" value="<?php echo $produto ?>"> <br>
Estoque <input type="text" name="estoque" value="<?php echo $estoque ?>"> <br>
Estoque Max <input type="text" name="estoquemax" value="<?php echo $estoquemax ?>"> <br>
Estoque Min <input type="text" name="estoquemin" value="<?php echo $estoquemin ?>">
<input type="submit" value="Atualizar"> 