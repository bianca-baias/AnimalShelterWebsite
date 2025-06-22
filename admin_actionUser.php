<?php  require "header_logged.php"?>

        <main>
        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $sql = "SELECT * FROM users WHERE users.id = '$id' LIMIT 1";
                $result =  mysqli_query($conn,$sql);
                $row= mysqli_fetch_assoc($result);
            }
            else{
                $row['id']='';
                $row['nume']='';
                $row['email']='';
                $row['parola']='';
                $row['prenume']='';
                $row['poza']='';
                }
        ?>

            <div class="container-fluid" id="signUpForm">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Utilizator</b></h5></div></div>

                <form method="post" action="includes/admin/admin_addUser.inc.php">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="email" name="email" value="<?php  echo $row['email']?>" required>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPassword">Parola</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="parola" name="parola" value="<?php  echo $row['parola']?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputNume">Nume</label>
                            <input type="text" class="form-control" id="inputNume" placeholder="nume" name="nume" value="<?php  echo $row['nume']?>" required>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPrenume">Prenume</label>
                            <input type="text" class="form-control" id="inputPrenume" placeholder="prenume" name="prenume" value="<?php  echo $row['prenume']?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="uploadPozaProfil"></label>Poza profil: </label>
                            <input type="file" class="form-control-file" id="uploadPozaProfil" name="poza" value="<?php  echo $row['poza']?>"> 
                        </div>
                                <div class="col-sm-12 col-lg-6" hidden>
                                    <label hidden><b>ID</b></label>
                                    <input class="form-control" placeholder="nume" name="id" value = "<?php  echo $row['id']?>" hidden>
                                </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 col-lg-12">
                            <button class="btn btn-primary" type="submit" id="save">Salveaza</button>
                            <a class="btn btn-secondary" href="admin_usersCustomers.php" id="cancel">Anuleaza</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </main>
        
<?php  require "footer.php"?>