<?php

require 'functions.php';

$lider = isset($_POST['lider']) ? $_POST['lider'] : ""; 
$nome = isset($_POST['nome']) ? $_POST['nome'] : ""; 
$email = isset($_POST['email']) ? $_POST['email'] : ""; 
$senha = isset($_POST['senha']) ? $_POST['senha'] : "";

$pdo = db_connect();

$sql = $pdo->prepare("SELECT id  FROM login WHERE email = :e");

$sql->bindValue(":e",$email);
$sql->execute();
if($sql->rowCount() > 0){

    header("refresh: 0.3;index.php");

    echo "<script>alert('Usuário Já Cadastrado!');</script>";
    exit();
} else {
    //Caso não, cadastrar
    $sql = $pdo->prepare("INSERT INTO  login (lider, nome, email, senha) VALUES (:l,:n,:e,:s)");
    $sql->bindValue(":l",$lider);
    $sql->bindValue(":n",$nome);
    $sql->bindValue(":e",$email);
    $sql->bindValue(":s",md5($senha));
    $sql->execute();

    header("refresh: 0.3;index.php");

    echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    exit();
}  

?>