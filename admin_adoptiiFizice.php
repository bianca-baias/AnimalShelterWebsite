<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid text-center admin-pet">   
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: left; color:#ae1d1d">                    
                        <h5><strong>Adoptii fizice</strong></h5>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: right;">                    
                        <a href="admin_actionAdoptiiFizice.php" class="btn btn-primary"> Adauga adoptie fizica <i class="bi bi-plus-circle"></i></a>
                    </div>
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

                                    $sqlv="SELECT * FROM adoptii LIMIT $start, $limit"; 
                                    $resultv= mysqli_query($db,$sqlv);
                                    if (!$resultv)
                                    die('Invalid querry:' .mysqli_error($db));
                                    else 
                                    {
                                    
                                        while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
                                            {echo "<tr><td>";
                                            echo $myrow["id"];
                                            echo "</td><td>";
                                            echo $myrow["id_pet"];
                                            echo "</td><td>";
                                            echo $myrow["id_user"];
                                            echo "</td><td>";
                                            echo $myrow["nume"];
                                            echo "</td><td>";
                                            echo $myrow["prenume"];
                                            echo "</td><td>";
                                            echo $myrow["email"];
                                            echo "</td><td>";
                                            echo $myrow["data_adoptie"];
                                            echo '</td><td> 
                                                <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                                <a href="admin_actionAdoptiiFizice.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                            </td></tr>'; 
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