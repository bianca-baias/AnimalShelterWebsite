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
        $varsta = htmlspecialchars($_POST["varsta"]);
        $sex = htmlspecialchars($_POST["sex"]);
        $status = htmlspecialchars($_POST["status"]);
        $temperament = htmlspecialchars($_POST["temperament"]);
        $poza = htmlspecialchars($_POST["poza"]);
        $talie = htmlspecialchars($_POST["talie"]);
        $intrare = htmlspecialchars($_POST["data_intrare"]);
        $descriere = htmlspecialchars($_POST["descriere"]);

        // Add the data to database
        $sql="INSERT INTO pet(specie, nume, varsta, sex, talie, temperament, data_intrare, descriere, poza, status) values ('caine', '$nume', '$varsta', '$sex', '$talie', '$temperament', '$intrare', '$descriere', '$poza', '$status')";
        //echo $sql;
        //echo "</br>";

        $results= mysqli_query($db,$sql);
        if (!$results)
            die('Invalid querry:' .mysqli_error($db));

        // if(empty($nume)){
        //     //header("Location: admin_pets.html");

        //     exit();
        // }

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


