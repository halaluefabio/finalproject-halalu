<?php
    require('conn.php');
        
    $username = $_POST['username'];
    $password = $_POST['password'];
    $opcao = $_POST['opcao'];

    $connexao->query("INSERT INTO tab_cadastro(username, password, opcao) 
    VALUES ('$username', '$password', '$opcao')");
    // $connexao-> query("INSERT INTO cadastro (USERNAME, PASSWORD) VALUES ('$username', '$password')");
    
    header('Access-Control-Allow-Origin: *');
    http_response_code(201);
?>