<?php 
    require_once "includes/dbh.php";
    session_start();
    $page=basename($_SERVER['PHP_SELF']);
    if(isset($_SESSION["id"])){
        $IdUser=$_SESSION["id"];
        $sql = "SELECT categorie from users where users.id = '$IdUser'" ;
        $result =mysqli_query($conn,$sql);
        $myrow=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $categorie = $myrow['categorie'];
    }
    else {
        $categorie = 2;
    }

    $sql="SELECT nume_pagina, link, categorie_utilizator, vizibil FROM pagini WHERE pagini.categorie_utilizator='$categorie'";
    $result = mysqli_query($conn,$sql);
    $rows= mysqli_num_rows($result);
    
    /* Daca sw ramane 0 inseamna ca userul nu are drepturi pe pagina respectiv daca $myrow["Meniu"] e 1 inseamna ca pagina respectiva trebuie sa apara in meniu, daca e 0 inseamna ca are drepturi dar nu trebuie sa apara*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Adapostul de Animale Baia Mare</title>
    </head>

    <body>
        <?php echo $page; ?>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary navbar-dark">
                <div class="navbar container-fluid">
                    <?php if($categorie == 1) { echo
                    '<a href="admin_dashboard.php" class="button" id="home_button">
                        <svg id="home" xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#fff9f5" class="bi bi-house" viewBox="0 0 16 16" href="index.php">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        Administrare site
                    </a>';
                    }
                    else{ echo
                    '<a href="index.php" class="button" id="home_button">
                        <svg id="home" xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#fff9f5" class="bi bi-house" viewBox="0 0 16 16" href="index.php">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        Adapostul de animale BM
                    </a>';
                    }
                    ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav">
                            <?php 
                                $resArray = [];
                                $permitted=0;
                                $sesReq = 0;
                                $visible = 0;
                                while($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
                                    $link = $myrow['link'];
                                    $name = $myrow['nume_pagina'];
                                    if($name == "Cont" || $name == "Favorite" || $name == "Log out") {$sesReq=1;} else{$sesReq=0;}
                                    if($sesReq == 1){
                                        if(isset($_SESSION['email'])){
                                            if($myrow['vizibil'] == 1)
                                                {$visible = 1;}
                                            else 
                                                {$visible = 0;}
                                        }
                                        else {
                                            $visible = 0;
                                            }
                                    }
                                    else{
                                        if($name == "Log in"){
                                            if(!isset($_SESSION['email']))
                                            {
                                                if($myrow['vizibil'] == 1)
                                                    {$visible = 1;}
                                                else 
                                                    {$visible = 0;}
                                            }
                                            else {$visible = 0;}
                                        }
                                        else{
                                            if($myrow['vizibil'] == 1)
                                                {$visible = 1;}
                                            else 
                                                {$visible = 0;}
                                        }
                                    }
                            ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo "$link";?>" <?php if($visible==0) {echo ' hidden';}?> > <?php echo "$name";?>
                                        </a>
                                    </li>
                            <?php 
                                    if ($myrow['link']==$page)
                                        {$permitted = 1;}
                                }  
                                
                                if($permitted == 0)
                                {
                                    redirectioneaza("includes/logout.inc.php");
                                }
                                
                            ?> 
                        </ul>
                    </div>
                </div>
            </nav>
        </header>