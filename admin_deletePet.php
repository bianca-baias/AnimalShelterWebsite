<?php
//var_dump($_SERVER["REQUEST_METHOD"]);


$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"animal_shelter");

try{


    // Check if the page is accesed by a get method, and not just from url for example
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {

        $id=htmlspecialchars($_GET["id"]);

        // Delete the data from database
        $sql="DELETE FROM pet WHERE pet.id = '$id'";

        $results= mysqli_query($db,$sql);

        if (!$results){
            die('Invalid querry:' .mysqli_error($db));
        }

        header("Location: admin_pets.php");
    }
    else{
        //Redirect to homepage if this page is trying to be accessed directly
        header("Location: index.html");
    }
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}


