<?php  require "admin_header.php"?>

        <main>

        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $sql = "SELECT * FROM sponsori WHERE sponsori.id = '$id' LIMIT 1";
                $result =  mysqli_query($conn,$sql);
                $row= mysqli_fetch_assoc($result);
            }
            else{
                $row['id']='';
                $row['nume']='';
                $row['email']='';
                $row['poza']='';
                $row['telefon']='';
                $row['cod_fiscal']='';
                $row['CUI']='';
                $row['adresa']='';
                }
        ?>

            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Sponsor</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form method="post" action="includes/admin/admin_addSponsor.inc.php">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume</b></label>
                                    <input class="form-control" placeholder="nume" name="nume" value="<?php  echo $row['nume']?>" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Email</b></label>
                                    <input class="form-control" placeholder="email" name="email" value="<?php  echo $row['email']?>" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Telefon</b></label>
                                    <input class="form-control"  placeholder="telefon" name="telefon" value="<?php  echo $row['telefon']?>" required></input>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="uploadPozaProfil"></label><b>Sigla</b></label>
                                    <input type="file" class="form-control-file" id="uploadPozaProfil" name="poza" value="<?php  echo $row['poza']?>" required> 
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Cod fiscal*</b></label>
                                    <input class="form-control" placeholder="optional" name="cod_fiscal" value="<?php  echo $row['cod_fiscal']?>">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>CUI</b></label>
                                    <input class="form-control" placeholder="CUI" name="CUI" value="<?php  echo $row['CUI']?>" required>
                                </div>
                                <div class="col-sm-12 col-lg-12 actionPet">
                                    <label><b>Adresa</b></label>
                                    <input class="form-control" placeholder="adresa" name="adresa" value="<?php  echo $row['adresa']?>" required>
                                </div>
                                <div class="col-sm-12 col-lg-6" hidden>
                                    <label hidden><b>ID</b></label>
                                    <input class="form-control" placeholder="id" name="id" value = "<?php  echo $row['id']?>" hidden>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <button class="btn btn-primary" type="submit" id="save">Salveaza</button>
                                    <a class="btn btn-secondary" href="admin_usersSponsors.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>