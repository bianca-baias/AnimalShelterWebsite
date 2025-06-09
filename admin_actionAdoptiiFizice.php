<?php  require "admin_header.php"?>

        <main>
        <?php 
            $db=mysqli_connect("127.0.0.1","root","");
            mysqli_select_db($db,"animal_shelter");

            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $sql = "SELECT * FROM adoptii WHERE adoptii.id = $id LIMIT 1";
                $result =  mysqli_query($db,$sql);
                $row= mysqli_fetch_assoc($result);
            }
            else{
                $row['id']='';
                $row['id_pet']='';
                $row['id_user']='';
                $row['nume']='';
                $row['prenume']='';
                $row['email']='';
                $row['data_adoptie']='';
                }
        ?>

            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Adoptie fizica</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form method="post" action="includes/admin/addadoptiefizica.inc.php">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID pet</b></label>
                                    <input class="form-control" placeholder="id" name="id_pet" value = "<?php  echo $row['id_pet']?>"required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID adoptator*</b></label>
                                    <input class="form-control" placeholder="optional" name="id_user" value = "<?php  echo $row['id_user']?>">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume adoptator</b></label>
                                    <input class="form-control" placeholder="nume" name="nume" required value = "<?php  echo $row['nume']?>">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Prenume adoptator</b></label>
                                    <input class="form-control" placeholder="prenume" name="prenume" required value = "<?php  echo $row['prenume']?>">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Email</b></label>
                                    <input class="form-control" placeholder="email" name="email" required value = "<?php  echo $row['email']?>">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="startDate"><b>Data adoptiei</b></label>
                                    <input id="startDate" class="form-control" type="date" name="data_adoptie" required value = "<?php  echo $row['data_adoptie']?>"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <button class="btn btn-primary" type="submit" id="save">Salveaza</button>
                                    <a class="btn btn-secondary" href="admin_adoptiiFizice.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6" hidden>
                                    <label hidden><b>ID</b></label>
                                    <input class="form-control" placeholder="nume" name="id" value = "<?php  echo $row['id']?>" hidden>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>