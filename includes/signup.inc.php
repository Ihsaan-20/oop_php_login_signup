<?php

if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pw = $_POST['user_pw'];
    $user_pw_confirm = $_POST['user_pw_confirm'];

    $user_name = filter_var($user_name, FILTER_SANITIZE_STRING);
    $user_email = filter_var($user_email, FILTER_SANITIZE_EMAIL);



    if ($user_pw !== $user_pw_confirm) {
        header("location: ../signup.php?error=passwordmismatch");
        exit();
    }


    include '../classes/DatabaseController.class.php';
    include '../classes/signup.class.php';
    include '../classes/signupController.class.php';

    $signup = new signupController($user_name, $user_email, $user_pw, $user_pw_confirm);

    try {
        $signup->signUpUser();
        $success = "New Account Created successfully!";    
        header("location: ../index.php?error=none&success=$success");
    } catch (Exception $e) {
        $error = $e->getMessage();
        header("location: ../signup.php?error=$error");
    }
    
}
