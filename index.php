<?php
 require 'functions.php';
 require_once 'C:\laragon\www\TCC\CLASSES/usuarios.php';
 /*$u = new Usuario; */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link rel="stylesheet" type="text/css" href="./logincss/sytle.css">
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
                    faça login na conta
                </h4>
                
                <form  method="POST" action="./logar.php" class="form-box px-3">

               
                    <div class="form-input">
                       <!-- <span><i class="fa fa-envelop-o"></i></span>-Aki que ta a merda--->
                        <input  type="text"  name="email" placeholder="endereço de e-mail" tabindex="10" required>
                    </div>
                    <div class="form-input">
                      <!--  <span><i class="fa fa-key"></i></span>  -->
                        <input type="password" name="senha" placeholder="senha" required>
                    </div>

                    <!--<div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cb1" name="">
                            <label class="custom-control-label" for="cb1">lembre de mim</label>
                        </div>
                    </div> -->
                    <div class="mb-3 ">
                        <button type="submit" name="btnLogin" class="btn btn-block text-uppercase">
                            Login
                        </button>
                    </div>
                         
                    <!---<div class="text-right">
                        <a href="" class="forget-link"> Esqueceu a senha?</a>
                    </div> --->

                   <!-- <div class="text-center mb-3">
                        ou faça login com
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <a href="#" class="btn btn-block btn-social btn-facebook">
                                facebook
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="#" class="btn btn-block btn-social btn-google">
                                google
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="#" class="btn btn-block btn-social btn-twitter">
                                twitter
                            </a>
                        </div>
                    </div>  --->

                    <hr class="my-4">

                    <div class="text-center mb-2">
                        não tem conta?
                        <a href="loginCreate.php" class="register-link">
                            Registre-se aqui
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

?>

</body>
</html>