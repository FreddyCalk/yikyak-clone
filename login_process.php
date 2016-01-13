<?php

    include 'inc/db_connect.php';


    if($_GET['registration']){

        $username = $_POST['username'];

        $password = $_POST['password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }





    try{
    
        DB::insert('users', array(
    
            'uid' => '',
    
            'name' => $username,
    
            'password' => $hashed_password
    
        ));
    
    }catch(MeekroDBException $e){

        header('Location: /signup.php?error=yes');
        
        exit;
    
    }

    $_SESSION['username'] = $username;

    $_SESSION['uid'] = DB::insertID();

    header('Location /index.php?callback=registration');


?>

