<?php

include('conexao.php');


$idprodutos = $_POST['idprodutos'];
$qtdvendida = $_POST['qtdvendida'];
$estoque  = $_POST['estoque'];

echo $estoque."<br>";
echo $qtdvendida;


$qtdatualizada = $estoque - $qtdvendida;

echo "<br>".$qtdatualizada;


$sql = "UPDATE tblprodutos set estoque='$qtdatualizada'
where idprodutos='$idprodutos'";

mysqli_query($conn,$sql);
header("Location:index.php");

if($qtdatualizada >0){
    
    $sql = "UPDATE tblprodutos set estoque='$qtdatualizada'
    where idprod='$idprod'";
    
    mysqli_query($conn,$sql);
    header("Location:index.php");
    
    
    } else {
    echo  'Quantidade inexistente.';
    
    }
    
