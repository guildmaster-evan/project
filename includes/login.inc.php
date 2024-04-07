<?php
if (isset($_POST['login-submit'])) {

    require 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error=emptyfields&username=".$username."&password=".$password);
        exit();
    }


    else {
        $sql = "SELECT * FROM mytable WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password, $row['password']);
                if ($passwordCheck == false){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                } 
                else if ($passwordCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['ID'];
                    $_SESSION['userName'] = $row['username'];
                    $_SESSION['username'] = $username; // Set the username in the session

                    header("Location: ../response.php?login=success");
                    exit();
            }
            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
            
            }
            else {
                header("Location: ../login.php?error=wrongpassword");
                exit();
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} 
else {
    header("location: ../login.php");
} 
?>
