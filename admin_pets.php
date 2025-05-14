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
                <a href="admin_dashboard.html" class="button" id="home_button">
                        <svg id="home" xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#fff9f5" class="bi bi-house" viewBox="0 0 16 16" href="index.html">
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
                                <a class="nav-link" href="admin_dashboard.html">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_pets.php">Animale</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Adoptii</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_adoptiiFizice.php">Adoptii fizice</a></li>
                                        <li><a class="dropdown-item" href="admin_adoptiiDistanta.html">Adoptii la distanta</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Utilizatori</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_usersCustomers.html">Clienti</a></li>
                                        <li><a class="dropdown-item" href="admin_usersMembers.html">Membri</a></li>
                                        <li><a class="dropdown-item" href="admin_usersSponsors.html">Sponsori</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Donatii</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin_donatiiOnline.html">Online</a></li>
                                        <li><a class="dropdown-item" href="admin_donatiiFormular.html">Formular 3.5%</a></li>
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
                                <a class="nav-link" href="log_in.html">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid text-center admin-pet">   
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: left; color:#ae1d1d">                    
                        <h5><strong>Animale</strong></h5>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: right;">                    
                        <a href="admin_actionPet.php" class="btn btn-primary"> Adauga animal nou <i class="bi bi-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row" >
                    <form class="form-inline" method="get" action="">
                        <div class="row" style="text-align:left;">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-1">
                                <label>Cauta dupa nume:</label>
                            </div>
                            <div class="col-lg-2">
                                <input class="form-control" placeholder="nume" name="search">
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-primary" type="submit" id="save">Cauta</button>
                            </div>
                            <div class="col-lg-1">
                                <a href="admin_pets.php" class="btn btn-primary" id="cancel" hidden>Inapoi</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nume</th>
                                    <th scope="col">Varsta</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Temperament</th>
                                    <th scope="col">Intrare</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                        $db=mysqli_connect("127.0.0.1","root","");
                                        mysqli_select_db($db,"animal_shelter");
                                        $start = 0;
                                        $limit = 10;
                                        $id = 1;

                                        if(isset($_GET['id']))
                                        {
                                        $id=$_GET['id'];
                                        $start=($id-1)*$limit;
                                        }

                                    // if we searched for a pet
                                    if(isset($_GET['search']))
                                    {
                                        $values = $_GET['search'];
                                        
                                        $sqlv = "SELECT * FROM pet WHERE  pet.nume LIKE ('%$values%')";
                                        $resultv= mysqli_query($db,"SELECT * FROM pet WHERE  pet.nume LIKE ('%$values%') LIMIT $start, $limit");
                                        $rows= mysqli_num_rows(mysqli_query($db,$sqlv));
                                        // if there is no pet found, show message
                                        if($rows == 0)
                                        {
                                            echo "<tr><td colspan='8'>";
                                            echo 'Nici un rezultat';
                                            echo '</td></tr>';
                                        }                                   
                                    }
                                    else
                                    {
                                        // if we just browse the page
                                        $sqlv = "SELECT * FROM pet";
                                        $resultv= mysqli_query($db,"SELECT * FROM pet LIMIT $start, $limit");
                                    }

                                    if (!$resultv)
                                        die('Invalid querry:' .mysqli_error($db));
                                    else 
                                    {
                                    
                                        while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
                                            {
                                            ?>
                                            <tr>
                                                <td> <?php echo $myrow['id']?>  </td>
                                                <td> <?php echo $myrow['nume']?>  </td>
                                                <td> <?php echo $myrow['varsta']?>  </td>
                                                <td> <?php echo $myrow['sex']?>  </td>
                                                <td> <?php echo $myrow['temperament']?>  </td>
                                                <td> <?php echo $myrow['data_intrare']?>  </td>
                                                <td> <?php echo $myrow['status']?>  </td>
                                                <td> 
                                                    <a href="admin_actionPet.php?id=<?php echo $myrow['id'];?>" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a> 
                                                    <a href="admin_deletePet.php?id=<?php echo $myrow['id'];?> "class="btn btn-secondary"> Sterge <i class="bi bi-pencil-square"></i></a>  
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        echo " </tbody></table>";
                                        
                                        $rows= mysqli_num_rows(mysqli_query($db,$sqlv));
                                        $total=ceil($rows/$limit);

                                        // if($id>1)
                                        // {
                                        // echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS </a>";
                                        // }

                                        echo "<ul class='page' style='list-style-type:none;'>";
                                        for($i=1;$i<=$total;$i++)
                                        {
                                            if($i==$id) 
                                            { echo "<li class='current' style='display:inline; padding-right:5px;'>".$i."</li>"; }
                                            else 
                                            { echo "<li style='display:inline; padding-right:5px;'><a href='?id=".$i."'>".$i."</a></li>"; }
                                        }
                                        echo "</ul>";

                                        if(isset($_GET['search'])){
                                            //display an "inapoi" button at the end of a search page
                                            echo ' <tr><td colspan="8"><a href="admin_pets.php" class="btn btn-primary" id="cancel"> Inapoi</a></td></tr>';
                                        }

                                        // if($id!=$total)
                                        // {
                                        // echo "<a href='?id=".($id+1)."' class='button'> NEXT</a>";
                                        // }
                                    }
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer>
            <div class="footer sticky-bottom container-fluid text-center">
                <div class="row">
                    <div class="col-sm">
                        <img src="Images/logo.png" alt="logo" id="logo"> <br> Adapostul de animale Baia Mare
                    </div>
                    <div class="col-sm">
                        <b>Sponsori:</b>
                        <img src="Images/sp1.png" alt="sponsor1" id="sp">
                        <img src="Images/sp2.png" alt="sponsori" id="sp">
                        <img src="Images/sp3.png" alt="sponsori" id="sp">
                    </div>
                    <div class="col-sm">
                        <b>Contact</b><br>
                        <i>Telefon:</i> 0743114488 <br>
                        <i>Email:</i> adapostuldecainibaiamare@yahoo.com <br>
                        <i>Adresa:</i> Baia Mare, Strada Iazului, Nr. 2 
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>