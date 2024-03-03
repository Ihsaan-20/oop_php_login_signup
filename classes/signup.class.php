<?php

class signUp extends DatabaseController {

    
    protected function setUser($user_name, $user_email, $user_pw)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (user_name, user_email, user_pw) VALUES (?,?,?)');
        if (!$stmt) {
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $hashPassword = password_hash($user_pw, PASSWORD_DEFAULT);
        $stmt->bind_param('sss', $user_name, $user_email, $hashPassword);

        if (!$stmt->execute()) {
            $stmt->close();
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        $stmt->close();
    }

    protected function checkUser($user_name, $user_email)
    {
        $stmt = $this->connect()->prepare('SELECT user_name FROM users WHERE user_name = ? OR user_email = ?');
        $stmt->execute(array($user_name, $user_email));

        if(!$stmt->execute(array($user_name, $user_email)))
        {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        $resultCheck ;

        if ($stmt->num_rows > 0) {
            $resultCheck = false; 
        } else {
            $resultCheck = true; 
        }

        return $resultCheck;

        $stmt->close();
    }

}// main class end here;

?>
