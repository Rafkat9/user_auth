<?php

session_start();

unset($_SESSION['user']);
unset($_SESSION['error']);

header('Location: /reg/index.php');