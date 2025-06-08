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
                <a href="admin_dashboard.php" class="button" id="home_button">
                        <svg id="home" xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#fff9f5" class="bi bi-house" viewBox="0 0 16 16" href="index.php">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        Administrare site
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_pets.php">Animale</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Adoptii</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_adoptiiFizice.php">Adoptii fizice</a></li>
                                        <li><a class="dropdown-item" href="admin_adoptiiDistanta.php">Adoptii la distanta</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Utilizatori</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_usersCustomers.php">Clienti</a></li>
                                        <li><a class="dropdown-item" href="admin_usersMembers.php">Membri</a></li>
                                        <li><a class="dropdown-item" href="admin_usersSponsors.php">Sponsori</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Donatii</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_donatiiOnline.php">Online</a></li>
                                        <li><a class="dropdown-item" href="admin_donatiiFormular.php">Formular 3.5%</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Pagini</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_editAboutUs.html">Despre noi</a></li>
                                        <li><a class="dropdown-item" href="admin_editHelp.html">Implica-te</a></li>
                                        <li><a class="dropdown-item" href="admin_editDoneaza.html">Doneaza</a></li>
                                        <li><a class="dropdown-item" href="admin_editHappyEnding.html">Happy ending</a></li>
                                        <li><a class="dropdown-item" href="admin_editContact.html">Contact</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="includes/logout.inc.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>