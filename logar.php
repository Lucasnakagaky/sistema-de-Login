<?php
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: index.php');
}


$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, email from login where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row ==1){
  $_SESSION['usuario'] = $usuario;
  header('Location: ./areaPrivada.php');
}else {
	header('Location: index.php');
}

echo $row;exit;