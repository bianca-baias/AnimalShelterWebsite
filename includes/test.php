<?php 
    include_once 'dbh.php';
    
    $myfile = fopen("test.txt", "w");
    fwrite($myfile, $dbName);

    if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "" )
    {   
        redirect("index.php");
    }

    $mode='';
    $title = "Log in";

    if (isset($_POST["login-submit"]))
    {
        $mode = $_POST["login-submit"];
        fwrite($myfile, "\nLOGIN SET\n");
    }


    fwrite($myfile, "\nModul este: -$mode- ");

    if ($mode == "login") {

        $username = trim($_POST['email']);
        $pass = trim($_POST['parola']);

        if ($username == "" || $pass == "") {
            redirect("contact.html");
        } else {
            $sql = "SELECT * FROM users WHERE email = '$username' AND parola = '$pass' ";
            $results= mysqli_query($conn,$sql);

            fwrite($myfile, $results);
            if (!$results)
            {
                fwrite($myfile, "eroare");
                die('Invalid querry:' .mysqli_error($conn));
            }
            else 
                {

                $sql2 = mysqli_query($conn,"SELECT users.id, users.nume, users.email, drepturi.redirect from users left join drepturi on users.categorie = drepturi.categorie_utilizator where  users.email = '$username' AND users.parola= '$pass'");
                $myrow1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);

                $rows= mysqli_num_rows($sql2);

                if ($rows > 0) {
                    $_SESSION["user_id"] = $myrow1["id"];
                    $_SESSION["name"] = $myrow1["nume"];
                    $_SESSION["username"] = $myrow1["email"];
                    redirect($myrow1["redirect"]);
                    exit;
                } 
            }
        }
        redirect("index.php");
    }

?>