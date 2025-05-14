<?php
//var_dump($_SERVER["REQUEST_METHOD"]);


$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"animal_shelter");

try{


    // Check if the page is accesed by a post method, and not just from url for example
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // htmlspecialchars - used for sanitizes the data from the user input, so the user cannot hack our website or db
        $nume = htmlspecialchars($_POST["nume"]);
        $prenume = htmlspecialchars($_POST["prenume"]);
        $id_pet = htmlspecialchars($_POST["id_pet"]);
        $id_user = htmlspecialchars($_POST["id_user"]);
        $email = htmlspecialchars($_POST["email"]);
        $data_adoptie = htmlspecialchars($_POST["data_adoptie"]);

        // Add the data to database
        $sql="INSERT INTO adoptii(id_pet, id_user, nume, prenume, email, data_adoptie) values ('$id_pet', '$id_user','$nume', '$prenume', '$email', '$data_adoptie')";
        //echo $sql;
        //echo "</br>";

        $results= mysqli_query($db,$sql);
        if (!$results)
            die('Invalid querry:' .mysqli_error($db));

        header("Location: admin_adoptiiFizice.php");
    }
    else{
        //Redirect to homepage if this page is trying to be accessed directly
        header("Location: index.html");
    }
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}


