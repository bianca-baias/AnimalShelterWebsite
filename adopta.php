<?php  require "header_logged.php"?>

        <main>
            <div class="container-fluid container-pet">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-2"  id="filterColumn" >
                        <div class="row">
                            <div class="col">
                                <b style="color: #ae1d1d;">Filtre:</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="row" >
                                        <div class="col-2 col-md-4 col-lg-4"  id="filter-name">
                                            <label for="sex">Sex</label>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-7"> 
                                            <select class="form-select"  name="sex">
                                                <option selected>-</option>
                                                <option value="1">mascul</option>
                                                <option value="2">femela</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-4 col-lg-4"  id="filter-name">
                                            <label for="varsta">Varsta</label>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-7"> 
                                                <input type="text" class="form-control" placeholder="ani">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-4 col-lg-4" id="filter-name">
                                            <label for="talie">Talie</label>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-7"> 
                                            <select class="form-select"  name="talie">
                                                <option selected>-</option>
                                                <option value="1">mica</option>
                                                <option value="2">medie</option>
                                                <option value="3">mare</option>
                                            </select>
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-4 col-lg-4" id="filter-name">
                                            <label for="temperament">Caracter</label>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-7"> 
                                            <select class="form-select"  name="temperament">
                                                <option selected>-</option>
                                                <option value="1">prietenos</option>
                                                <option value="2">anxios</option>
                                                <option value="3">agresiv</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-12 col-lg-12" style="text-align: center;">
                                            <button class="btn btn-primary" id="filter-button"> Filtreaza</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>


                    <div class="col-sm-12 col-md-8 col-lg-10">
                        <div class="row">
                            <div class="col-7 col-md-6 col-lg-9" style="text-align: center;"> 
                                <h5 style="color: #ae1d1d;"><b><u>Animale pentru adoptie </u></b></h5> 
                            </div>
                            <div class="col-4 col-md-6 col-lg-3" style="text-align: right; padding-bottom: 10px;">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" id="sortButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sorteaza:
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Varsta: ascendent</a></li>
                                        <li><a class="dropdown-item" href="#">Varsta: descendent</a></li>
                                        <li><a class="dropdown-item" href="#">Cele mai noi</a></li>
                                        <li><a class="dropdown-item" href="#">Cele mai vechi</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>


                        <div class="row g-3">

                            <?php 
                                $start = 0;
                                $limit = 6;
                                $id = 1;
                                
                                if(isset($_GET['id']))
                                {
                                $id=$_GET['id'];
                                $start=($id-1)*$limit;
                                }
                                
                                
                                // if we just browse the page
                                $sqlv = "SELECT * FROM pet";
                                $resultv= mysqli_query($conn,"SELECT * FROM pet LIMIT $start, $limit");
                                
                                if (!$resultv)
                                    die('Invalid querry:' .mysqli_error($conn));
                                else 
                                {
                                    while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
                                        {
                                        ?>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <div class="card h-100" id="pet-listing-card">
                                                    <div class="card-head">
                                                        <?php $numePoza = $myrow['id']."-".$myrow['poza']; $imgPath ="includes/admin/uploads/profile-"."$numePoza"; ?>
                                                        <img src="<?php echo $imgPath ?>" class="card-img-top" alt="pet" id="pet-listing-image">
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        <h5 class="card-title"  id="card-body-listing"><b><?php echo $myrow['nume']?></b></h5>
                                                        <p class="card-text"  id="card-body-listing">
                                                            Varsta: <?php echo $myrow['varsta']?> ani <br>
                                                            Talie: <?php echo $myrow['talie']?>
                                                            </p>
                                                        <div class="row text-center">
                                                            <div class="col-12 col-md-12 col-lg-9">
                                                                <a href="pet.php?id=<?php echo $myrow['id'];?>" class="btn btn-primary" id="adopta-listing">Detalii</a>
                                                            </div>
                                                        
                                                            <div class="col-12 col-md-12 col-lg-3">
                                                                <a href="#" class="btn btn-primary" id="favorite-listing"> <i class="bi bi-heart-fill" style="color: #ae1d1d;"></i> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    <?php
                                    }
                                    
                                    $rows= mysqli_num_rows(mysqli_query($conn,$sqlv));
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


                        <div class="row">
                            <div class="col-6" style="text-align: right;">
                                <button>Pagina anterioara</button>
                            </div>
                            
                            <div class="col-6" style="text-align: left;">
                                <button>Pagina urmatoare</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
<?php  require "footer.php"?>