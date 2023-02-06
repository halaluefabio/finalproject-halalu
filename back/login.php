<?php
    // require('conn.php');
    require('conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
     
    // $result = ("SELECT * FROM tab_cadastro WHERE username = '$username' AND password = '$password' ");
    // $data = $result->fetch_all(MYSQLI_ASSOC);
     //$data = $connexao->query($result);

    $result = $connexao->query("SELECT id, username, opcao FROM tab_cadastro WHERE
     USERNAME = '$username' AND PASSWORD = '$password'");

    
     
    $data = $result->fetch_all(MYSQLI_ASSOC);

    header('Access-Control-Allow-Origin: *');
    if (sizeof($data) == 0) {
        http_response_code(403);
        exit();
    }
    
    echo json_encode($data[0]);


    // if (mysqli_num_rows($result) < 1){
    //     print_r("n existe");
    // } else {
    //     print_r("existe");
    // }
?>