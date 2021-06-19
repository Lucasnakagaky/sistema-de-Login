<?php
    require_once 'C:\laragon\www\TCC\CLASSES/usuarios.php';
    $u = new Usuario; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link rel="stylesheet" type="text/css" href="logincss/sytle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</head>
<body>
<div class="form-container">
    <div class="row" px-3>
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex"></div>
            <div class="card-body">
                <h4 class="title text-center mt-4">
                    Cadastrar conta
                </h4> 

                <form method="POST" action='./cadastrar.php' class="form-box px-3">

                 <div class="form-input">
                        <input type="lider" name="lider" placeholder="Nome do lider" tabindex="10">
                    </div>
                    <div class="form-input">
                        <input type="nome" name="nome" placeholder="Nome do usuário" tabindex="10" required>
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" placeholder="Endereço de e-mail " tabindex="10" required>
                    </div>
                    <div class="form-input">
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="form-input">
                        <input type="password" name="confsenha" placeholder="Confirmar senha" required>
                    </div>
                    <div class="mb-3 ">
                        <button type="submit" name="btnLogin" class="btn btn-block text-uppercase" href="?pagina=home&action=add">Cadastrar</button>
                    </div>
                    </form>
                    </body>
                    </html>
                      
                    