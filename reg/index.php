<?php session_start();
// $_SESSION['user'] = 'raf';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['user'])): ?>
        <a href="<?php $_SERVER['SERVER_NAME']; ?>/reg/index.php">Выйти</a>
        <?php unset($_SESSION['user']);?>
    <?php else: ?>
        <a href="<?php $_SERVER['SERVER_NAME']; ?>/reg/form_auth.php">Войти</a>
        <a href="<?php $_SERVER['SERVER_NAME']; ?>/reg/form_reg.php">Регистрация</a>
    <?php endif; ?>
</body>
</html>