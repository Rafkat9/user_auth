<?php

session_start();

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$pdo = new PDO('mysql:host=localhost;dbname=users', 'root', '');
$sql = "SELECT * FROM user WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' =>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($user)) {
    $_SESSION['error'] = 'Пользователь с таким адресом уже существует ';
    header("Location: /reg/form_reg.php"); 
    exit;
}

$hashedPass = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $hashedPass]);
$_SESSION['error'] = 'Вы успешно зарегестрировались';
header("Location: /reg/form_auth.php"); 
exit;

