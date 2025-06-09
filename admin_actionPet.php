<?php  require "admin_header.php"?>

        <main>

        <?php 
            $db=mysqli_connect("127.0.0.1","root","");
            mysqli_select_db($db,"animal_shelter");

            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $sql = "SELECT * FROM pet WHERE pet.id = '$id' LIMIT 1";
                $result =  mysqli_query($db,$sql);
                $row= mysqli_fetch_assoc($result);
            }
            else{
                $row['id']='';
                $row['nume']='';
                $row['varsta']='';
                $row['sex']='';
                $row['status']='';
                $row['temperament']='';
                $row['descriere']='';
                $row['poza']='';
                $row['data_intrare']='';
                $row['talie']='';
                }
        ?>

            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Pet</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form method="post" action="includes/admin/admin_addPet.php">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume</b></label>
                                    <input class="form-control" placeholder="nume" name="nume" value = "<?php  echo $row['nume']?>" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Varsta</b></label>
                                    <input class="form-control" placeholder="varsta" name="varsta"  value = "<?php  echo $row['varsta']?>" required>
                                </div>

                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Sex</b></label>
                                    <select class="form-select" aria-label="Default select example" name="sex" required>
                                        <option value="M">Mascul</option>
                                        <option value="F"<?php echo ($row['sex'] == 'F')? "selected":"" ;?>>Femela</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                        <option value="disponibil">Disponibil</option>
                                        <option value="indisponibil" <?php echo ($row['status'] == 'indisponibil')? "selected":"" ;?> >Indisponibil</option>
                                        <option value="rezervat" <?php echo ($row['status'] == 'rezervat')? "selected":"" ;?>>Rezervat</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Temperament</b></label>
                                    <select class="form-select" aria-label="Default select example" name="temperament" required>
                                        <option  selected value="prietenos">Prietenos</option>
                                        <option value="agresiv" <?php echo ($row['temperament'] == 'agresiv')? "selected":"" ;?>>Agresiv</option>
                                        <option value="anxios " <?php echo ($row['temperament'] == 'anxios')? "selected":"" ;?>>Anxios</option>

                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="uploadPozaProfil"></label><b>Poze:</b></label>
                                    <input type="file" class="form-control-file" id="uploadPozaProfil" name="poza"<?php echo ($row['poza'] == '')? "required":"" ;?>  multiple> 
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="startDate"><b>Talie</b></label>
                                    <select class="form-select" aria-label="Default select example" name="talie" required>
                                        <option value="mica" <?php echo ($row['talie'] == 'mica')? "selected":"" ;?>>Mica</option>
                                        <option selected value="medie">Medie</option>
                                        <option value="mare" <?php echo ($row['talie'] == 'mare')? "selected":"" ;?>>Mare</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="startDate"><b>Data intrarii</b></label>
                                    <input id="startDate" class="form-control" type="date" name="data_intrare" value="<?php echo $row['data_intrare'];?>" required/>
                                </div>
                                <div class="col-sm-12 col-lg-12 actionPet">
                                    <label><b>Descriere</b></label>
                                    <textarea class="form-control" rows="4" placeholder="descriere" required style="resize: none;" name="descriere"><?php echo $row['descriere'];?></textarea>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet" hidden>
                                    <label hidden><b>ID</b></label>
                                    <input class="form-control" placeholder="nume" name="id" value = "<?php  echo $row['id']?>" hidden>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <button class="btn btn-primary" type="submit" id="save">Salveaza</button>
                                    <a class="btn btn-secondary" href="admin_pets.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>