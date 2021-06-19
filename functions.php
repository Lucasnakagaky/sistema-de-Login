<?php

function db_connect(){
	
    $username = 'root';
    $password_banco = '';
    
    try {
      $conn = new PDO('mysql:host=localhost;dbname=testetcc', $username, $password_banco);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo 'Deu erro do brabo Aki : ' . $e->getMessage();
    }
    
}
    

?>