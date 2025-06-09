<?php 
    session_start(); 
    require "includes/dbh.php";
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
        
        <header>   
            <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary navbar-dark">
                <div class="navbar container-fluid">
                <a href="index.php" class="button" id="home_button">
                        <svg id="home" xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#fff9f5" class="bi bi-house" viewBox="0 0 16 16" href="index.php">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        Adapostul de animale BM
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Despre noi</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="misiune.php">Misiune</a></li>
                                        <li><a class="dropdown-item" href="voluntari.php">Voluntari</a></li>
                                        <li><a class="dropdown-item" href="parteneri.php">Parteneri</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="adopta.php">Adopta</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Implica-te</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="adopta_distanta.php">Adopta la distanta</a></li>
                                        <li><a class="dropdown-item" href="foster.php">Foster</a></li>
                                        <li><a class="dropdown-item" href="voluntariat.php">Voluntariat</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Doneaza</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="doneaza_online.php">Online</a></li>
                                        <li><a class="dropdown-item" href="doneaza_fizic.php">Fizic</a></li>
                                        <li><a class="dropdown-item" href="redirect.php">Redirectioneaza 3.5%</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="happy_end.php">Happy end</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cont.php" id="contButton">Cont</a>
                            </li>
                            <?php  
                                if(!isset($_SESSION['email'])){
                                    echo '<li class="nav-item">
                                            <a class="nav-link" href="log_in.php">Log In</a>
                                        </li>';
                                }
                                else{
                                    echo '<li class="nav-item">
                                            <a class="nav-link" href="includes/logout.inc.php">Log out</a>
                                        </li>';
                                }

                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>