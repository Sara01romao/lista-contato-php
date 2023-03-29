<?php
include '../conexao/conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

echo $nome;
echo "$telefone";

$sql= "INSERT INTO `agenda`( `nome`, `telefone`) VALUES ('$nome','$telefone')";

$inserir= mysqli_query($conexao, $sql);







?>