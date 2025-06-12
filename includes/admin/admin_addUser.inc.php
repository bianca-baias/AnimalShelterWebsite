<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

require "../dbh.php";

try{
    // Check if the page is accesed by a post method, and not just from url for example
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // htmlspecialchars - used for sanitizes the data from the user input, so the user cannot hack our website or db
        $id = htmlspecialchars($_POST["id"]);
        $nume = htmlspecialchars($_POST["nume"]);
        $email = htmlspecialchars($_POST["email"]);
        $prenume = htmlspecialchars($_POST["prenume"]);
        $parola = htmlspecialchars($_POST["parola"]);
        $poza = htmlspecialchars($_POST["poza"]);

        if($id != '')
        {
        $sql = "UPDATE users set users.nume='$nume', users.prenume='$prenume', users.email='$email', users.parola='$parola',  users.poza='$poza' WHERE users.id='$id'";
        }
        else{
        // Add the data to database
        $sql="INSERT INTO users(email, nume, prenume, parola, categorie) values ('$email', '$nume', '$prenume', '$parola', 2)"; 
        }

        try{
            $results= mysqli_query($conn,$sql);
            if (!$results)
                die('No results:' .mysqli_error($conn));
        }
        catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
            $m = $e->getMessage();
            header("Location: ../../admin_dashboard.php?error=$m");
            exit();
            }

        header("Location: ../../admin_usersCustomers.php");
    }
    elseif ($_SERVER["REQUEST_METHOD"] == "GET"){


    }
    else{      
        //Redirect to homepage if this page is trying to be accessed directly  
        header("Location: ../../index.php"); 
    }
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}

