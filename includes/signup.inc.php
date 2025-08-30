<?php

if (isset($_POST["signup-submit"])){
    require "dbh.php";

    $email = $_POST["email"];
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $parola = $_POST["parola"];
    $poza = $_POST["poza"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    exit();
    }
    else {

        // query to check if we already have that email in the db
        $sql = "SELECT * FROM users WHERE users.email = ?";
        $stmt= mysqli_stmt_init($conn);

        // check if we can or not execute the statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else{

            //  'the statement that you want to bind the user input to', 'data type (s-string, b-blob, i-intger, d-double)' 
            // *nr of data type is the nr of placeholders we have in the sql query, the parameter
            mysqli_stmt_bind_param($stmt, 's', $email);

            // execute
            mysqli_stmt_execute($stmt);

            // store the result in the stmt variable
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);

            if($result > 0)
            {
                header("Location: ../sign_up.php?error=userexists&email=".$email);
            }
            else
            {
                $currentDate = date('Y-m-d');
                $sql = "INSERT INTO users (email, parola, nume, prenume, data_inscriere, poza, categorie) VALUES (?, ?, ?, ?, $currentDate, ?, 2)";
                $stmt= mysqli_stmt_init($conn);

                // check if we can or not execute the statement
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else{
                    // hash the password before sending it to the database
                    //$hashpwd = password_hash($parola, PASSWORD_DEFAULT);
                    //mysqli_stmt_bind_param($stmt, 'sssss', $email, $hashpwd, $nume, $prenume, $poza);

                    mysqli_stmt_bind_param($stmt, 'sssss', $email, $parola, $nume, $prenume, $poza);
                    // execute
                    mysqli_stmt_execute($stmt);
                    header("Location: ../sign_up.php?signup=success");
                    exit();
                    }
            }
        }
    mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
else{
    header("Location: ../sign_up.php");
    exit();
}

?>