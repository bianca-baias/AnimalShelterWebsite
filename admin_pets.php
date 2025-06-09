<?php  require "admin_header.php"; require "includes/dbh.php";?>

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
                                        $resultv= mysqli_query($conn,"SELECT * FROM pet WHERE  pet.nume LIKE ('%$values%') LIMIT $start, $limit");
                                        $rows= mysqli_num_rows(mysqli_query($conn,$sqlv));
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
                                        $resultv= mysqli_query($conn,"SELECT * FROM pet LIMIT $start, $limit");
                                    }

                                    if (!$resultv)
                                        die('Invalid querry:' .mysqli_error($conn));
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
                                                    <a href="includes/admin/admin_deletePet.php?id=<?php echo $myrow['id'];?> "class="btn btn-secondary"> Sterge <i class="bi bi-pencil-square"></i></a>  
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        echo " </tbody></table>";
                                        
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
                    </div>
                </div>
            </div>
        </main>
        
<?php  require "footer.php"?>