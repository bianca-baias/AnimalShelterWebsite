<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid text-center admin-pet">   
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: left; color:#ae1d1d">                    
                        <h5><strong>Adoptii fizice</strong></h5>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: right;">                    
                        <a href="admin_actionAdoptiiFizice.html" class="btn btn-primary"> Adauga adoptie fizica <i class="bi bi-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row" >
                    <form class="form-inline" method="get">
                        <div class="row" style="text-align:left;">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-1">
                                <label>Cauta dupa id pet:</label>
                            </div>
                            <div class="col-lg-2">
                                <input class="form-control" placeholder="id" name="search" required>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-primary" type="submit" id="save">Cauta</button>
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
                                    <th scope="col">ID pet</th>
                                    <th scope="col">ID user</th>
                                    <th scope="col">Nume</th>
                                    <th scope="col">Prenume</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Data adoptie</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $db=mysqli_connect("127.0.0.1","root","");
                                        mysqli_select_db($db,"animal_shelter");
                                        $nume = $prenume = $id_user = $id_pet = $email = $data_adoptie = "";
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
                                        
                                        $sqlv = "SELECT * FROM adoptii WHERE  adoptii.id_pet = '$values'";
                                        $resultv= mysqli_query($db,"SELECT * FROM adoptii WHERE  adoptii.id_pet = '$values' LIMIT $start, $limit");
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
                                        $sqlv = "SELECT * FROM adoptii";
                                        $resultv= mysqli_query($db,"SELECT * FROM adoptii LIMIT $start, $limit");
                                    }
                                    // $sqlv="SELECT * FROM adoptii LIMIT $start, $limit"; 
                                    // $resultv= mysqli_query($db,$sqlv);
                                    if (!$resultv)
                                    die('Invalid querry:' .mysqli_error($db));
                                    else 
                                    {
                                    
                                        while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
                                            {
                                            ?>
                                            <tr>
                                                <td> <?php echo $myrow['id']?> </td>
                                                <td> <?php echo $myrow['id_pet']?> </td>
                                                <td> <?php echo $myrow['id_user']?> </td>
                                                <td> <?php echo $myrow['nume']?> </td>
                                                <td> <?php echo $myrow['prenume']?> </td>
                                                <td> <?php echo $myrow['email']?> </td>
                                                <td> <?php echo $myrow['data_adoptie']?> </td>
                                                <td>
                                                    <a href="admin_actionAdoptiiFizice.php?id=<?php echo $myrow['id'];?>" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a> 
                                                    <a href="includes/admin/admin_deleteAdoptie.php?id=<?php echo $myrow['id'];?> "class="btn btn-secondary"> Sterge <i class="bi bi-pencil-square"></i></a>  
                                                </td> 
                                        <?php
                                        }
                                        echo " </tbody></table>";
                                        $rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM adoptii "));
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
                                        
                                        // if($id!=$total)
                                        // {
                                        // echo "<a href='?id=".($id+1)."' class='button'> NEXT</a>";
                                        // }
                                        if(isset($_GET['search'])){
                                            //display an "inapoi" button at the end of a search page
                                            echo ' <tr><td colspan="8"><a href="admin_adoptiiFizice.php" class="btn btn-primary" id="cancel"> Inapoi</a></td></tr>';
                                        }
                                    }
                                    ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
<?php  require "footer.php"?>