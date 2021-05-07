<?php
include('conexao.php');
$idprodutos  = $_POST['idprodutos'];
$produto      = $_POST['produto'];
$estoque    = $_POST['estoque'];
$estoquemax    = $_POST['estoquemax'];
$estoquemin    = $_POST['estoquemin'];


$sql = "UPDATE tblprodutos set produto='$produto',estoque='$estoque',estoquemax='$estoquemax',estoquemin='$estoquemin'
where idprodutos= '$idprodutos'";

$qry = mysqli_query($conn,$sql);

if($qry){
    header("Location:index.php");

} else{
    echo "Deu ruim.... <a href='index.php'>Voltar</a>";
}