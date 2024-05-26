<?php
declare(strict_types=1);
// to quering the database

function get_username(object $pdo, string $username){
    $query= "SELECT username FROM users_one WHERE username =:username;";

    $stmt =$pdo->prepare($query);
    $stmt->bindParm(":username",$username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email){
    $query= "SELECT email FROM users_one WHERE email =:email;";

    $stmt =$pdo->prepare($query);
    $stmt->bindParm(":email",$email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function set_user(object $pdo,string $pwd,string $username, string $email )
{
    $query= "INSERT INTO  users_one (username,pwd,email) VALUES (:username,:pwd,:email);";

    $stmt =$pdo->prepare($query);
    $options =[
        'cost'=>12
    ];
    $hashedPwd=password_hash($pwd,PASSWORD_BCRYPT,$options);
    
    
    
    $stmt->bindParm(":username",$username);
    $stmt->bindParm(":pwd",$hashedPwd);
    $stmt->bindParm(":email",$email);
    $stmt->execute();
}