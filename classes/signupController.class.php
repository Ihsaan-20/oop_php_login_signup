<?php

class signupController extends signUp
{
    private $user_name;
    private $user_email;
    private $user_pw;
    private $user_pw_confirm;

    public function __construct($user_name, $user_email, $user_pw, $user_pw_confirm)
    {
        $this->user_name = $user_name;
        $this->user_email = $user_email;
        $this->user_pw = $user_pw;
        $this->user_pw_confirm = $user_pw_confirm;
    }

    public function signUpUser()
    {
        if($this->emptyInput() == false)
        {
            $error = "empty input fields";
            header("location: ../signup.php?error=$error");
            exit();
        }

        if($this->invalidUserName() == false)
        {
            $error = "not a valid user name";
            header("location: ../signup.php?error=$error");
            exit();
        }

        if($this->invalidUserEmail() == false)
        {
            $error = "not a valid user email";
            header("location: ../signup.php?error=$error");
            exit();
        }

        if($this->matchPassword() == false)
        {
            $error = "password not matched!";
            header("location: ../signup.php?error=$error");
            exit();
        }

        if($this->userExistOrNot() == false)
        {
            $error = "user name/email already exists";
            header("location: ../signup.php?error=$error");
            exit();
        }

        $this->setUser($this->user_name, $this->user_email, $this->user_pw);

    }
    private function emptyInput()
    {
        $result;
        if (
            empty($this->user_name) || empty($this->user_email)
            || empty($this->user_pw) || empty($this->user_pw_confirm)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUserName()
    {
        $result;

        if (!preg_match('/^[a-zA-Z0-9]+$/', $this->user_name)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUserEmail()
    {
        $result ; 

        if (!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
            $result = false; 
        }else{
            $result = true;
        }

        return $result;
    }

    private function matchPassword()
    {
        $result ; 

        if ($this->user_pw !== $this->user_pw_confirm)
        {
            $result = false; 
        }else
        {
            $result = true;
        }

        return $result;
    }

    private function userExistOrNot()
    {
        $result ; 

        if (!$this->checkUser($this->user_name, $this->user_email))
        {
            $result = false; 
        }else
        {
            $result = true;
        }

        return $result;
    }


} //main class end here;
