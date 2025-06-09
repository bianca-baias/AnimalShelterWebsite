<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
require "../dbh.php";

try{
    // Check if the page is accesed by a post method, and not just from url for example
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // htmlspecialchars - used for sanitizes the data from the user input, so the user cannot hack our website or db
        $id = $_POST["id"];
        $nume = htmlspecialchars($_POST["nume"]);
        $prenume = htmlspecialchars($_POST["prenume"]);
        $id_pet = htmlspecialchars($_POST["id_pet"]);
        $id_user = htmlspecialchars($_POST["id_user"]);
        $email = htmlspecialchars($_POST["email"]);
        $data_adoptie = htmlspecialchars($_POST["data_adoptie"]);

        if($id_user == '') $id_user = 1;

        // Add the data to database

        if ($id == ''){
            $sql="INSERT INTO adoptii(id_pet, id_user, nume, prenume, email, data_adoptie) values ('$id_pet', '$id_user','$nume', '$prenume', '$email', '$data_adoptie');";
        }
        else{
            $sql="UPDATE adoptii SET adoptii.id_pet='$id_pet', adoptii.id_user='$id_user', adoptii.nume='$nume', adoptii.prenume='$prenume', adoptii.email='$email', adoptii.data_adoptie='$data_adoptie' WHERE adoptii.id='$id' ;";
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
        
        header("Location: ../../admin_adoptiiFizice.php");
        
    }
    else{
        //Redirect to homepage if this page is trying to be accessed directly
        header("Location: ../../index.php?error=accessdenied");
    }
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
    $m = $e->getMessage();
    header("Location: ../../admin_dashboard.php?error=$id");
    exit();
}


