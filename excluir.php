<?php
include('conexao.php');
$idprodutos  = $_GET['idprodutos'];


$sql = "delete from bdprodutos where idprodutos= '$idprodutos'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");

} else{
    echo "Deu ruim.... <a href='index.php'>Voltar</a>";
}