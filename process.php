<?php
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
include_once "User.php";

$username = $_REQUEST['username'];// inputted user name
$email = $_REQUEST['email'];//inputted user email
$password=$_REQUEST['password'];//inputted user password

// initializing the user class
$user = new User($username, $email, $password);
// initializing the smarty class
$smarty = new Smarty\Smarty;
// calling the validate method of the user class to validate user input
$errors = $user->validate();

//check if any validation condition was not met
if (empty($errors)) {
    //check if user was created
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
