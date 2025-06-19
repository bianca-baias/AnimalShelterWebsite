<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

require "../dbh.php";

try{


    // Check if the page is accesed by a get method, and not just from url for example
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {

        $id=htmlspecialchars($_GET["id"]);

        // Delete the data from database
        $sql="DELETE FROM sponsori WHERE sponsori.id = '$id'";

        $results= mysqli_query($conn,$sql);

        if (!$results){
            die('Invalid querry:' .mysqli_error($conn));
        }

        header("Location: ../../admin_usersSponsors.php");
    }
    else{
        //Redirect to homepage if this page is trying to be accessed directly
        header("Location: index.html");
    }
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}

