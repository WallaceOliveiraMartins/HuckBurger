<?php
 $nome = $_POST["nome"];
 $telefone = $_POST["telefone"];
$pontodacarne =$_POST["pontodacarne"];
$pao = $_POST["pao"];
$queijo =$_POST["queijo"];
$obs=$_POST["obs"];
include_once 'conexao.php';

$sql = "INSERT INTO pedidos VALUES(null, '$nome','$telefone','$pontodacarne','$pao','$queijo','$obs')";

if(mysqli_query($con, $sql)){
    echo "Pedido gravado com sucesso!";
}else{
    echo "Erro ao gravar pedido. <br>";
    echo "Erro: ".mysqli_error($con);
}
mysqli_close($con);

    ?>