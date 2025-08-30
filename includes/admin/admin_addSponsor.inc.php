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
        $telefon = htmlspecialchars($_POST["telefon"]);
        $poza = htmlspecialchars($_POST["poza"]);
        $cod_fiscal = htmlspecialchars($_POST["cod_fiscal"]);
        $CUI = htmlspecialchars($_POST["CUI"]);
        $adresa = htmlspecialchars($_POST["adresa"]);


        if($id != '')
        {
        $sql = "UPDATE sponsori set sponsori.nume='$nume', sponsori.telefon='$telefon', sponsori.email='$email', sponsori.poza='$poza', sponsori.cod_fiscal='$cod_fiscal', sponsori.CUI='$CUI', sponsori.adresa='$adresa' WHERE sponsori.id='$id'";
        }
        else{
        // Add the data to database
        $sql="INSERT INTO sponsori(email, nume, telefon, poza, cod_fiscal, CUI, adresa) values ('$email', '$nume', '$telefon', '$poza', '$cod_fiscal', '$CUI', '$adresa')"; 
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

        header("Location: ../../admin_usersSponsors.php");
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

