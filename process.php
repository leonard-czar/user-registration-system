<?php
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
include_once "User.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];

$user = new User($username, $email, $password);
$smarty = new Smarty\Smarty;

$errors = $user->validate();


if (empty($errors)) {
    if ($user->createUser()) {
        $smarty->assign('message', 'Registration successful!');
        $smarty->assign('username', $username);
        $smarty->assign('email', $email);
        $smarty->assign('password', $password);
        $smarty->display('smartyTemplate/confirmation.tpl');
    }
} else {

    $smarty->assign('errors', $errors);
    $smarty->display('smartyTemplate/error.tpl');
}
