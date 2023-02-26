<?php session_start(); ?>

<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=users', 'root', '');
$sql = "SELECT * FROM user WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($user['email'] && password_verify($password, $user['password'])) {
    // Записали пользователя
    $_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];
    header("Location: /reg/index.php");
    exit;
} else {
    $_SESSION['error'] = 'Неверный логин или пароль';
    header("Location: /reg/form_auth.php");
    exit;
}

