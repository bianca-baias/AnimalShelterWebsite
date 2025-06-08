<?php

if (isset($_POST["login-submit"])){
    require "dbh.php";

    $email = $_POST['email'];
    $parola = $_POST["parola"];

    if(empty($email) || empty($parola))
    {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE users.email=? AND users.parola =?";
        $stmt= mysqli_stmt_init($conn);

        // check if we can or not execute the statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../log_in.php?error=sqlerror");
            exit();
        }
        else{

            //  'the statement that you want to bind the user input to', 'data type (s-string, b-blob, i-intger, d-double)' 
            // *nr of data type is the nr of placeholders we have in the sql query, the parameter
            mysqli_stmt_bind_param($stmt, 'ss', $email, $parola);
            // execute
            mysqli_stmt_execute($stmt);
            // store the result in the stmt variable
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))
            {
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['categorie'] = $row['categorie'];
                if($_SESSION['categorie'] == 2){
                    header("Location: ../index.php");
                    exit();
                }
                else{
                    header("Location: ../admin_dashboard.php");
                    exit();
                    }
            }
            else {
                header("Location: ../index.php?error=incorectdata");
                exit();
            }
        }
    }
}
else{
    header("Location: ../index.php");
    exit();
}