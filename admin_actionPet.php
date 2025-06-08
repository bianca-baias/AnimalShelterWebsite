<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Pet</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form method="post" action="includes/admin/actionpet.inc.php">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume</b></label>
                                    <input class="form-control" placeholder="nume" name="nume" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Varsta</b></label>
                                    <input class="form-control" placeholder="varsta" name="varsta" required>
                                </div>

                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Sex</b></label>
                                    <select class="form-select" aria-label="Default select example" name="sex" required>
                                        <option value="M">Mascul</option>
                                        <option value="F">Femela</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                        <option value="disponibil">Disponibil</option>
                                        <option value="indisponibil">Indisponibil</option>
                                        <option value="rezervat">Rezervat</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="form-select"><b>Temperament</b></label>
                                    <select class="form-select" aria-label="Default select example" name="temperament" required>
                                        <option  selected value="prietenos">Prietenos</option>
                                        <option value="agresiv">Agresiv</option>
                                        <option value="anxios">Anxios</option>

                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="uploadPozaProfil"></label><b>Poze:</b></label>
                                    <input type="file" class="form-control-file" id="uploadPozaProfil" name="poza" multiple required> 
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="startDate"><b>Talie</b></label>
                                    <select class="form-select" aria-label="Default select example" name="talie" required>
                                        <option value="mica">Mica</option>
                                        <option selected value="medie">Medie</option>
                                        <option value="mare">Mare</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-lg-4 actionPet">
                                    <label for="startDate"><b>Data intrarii</b></label>
                                    <input id="startDate" class="form-control" type="date" name="data_intrare" required/>
                                </div>
                                <div class="col-sm-12 col-lg-12 actionPet">
                                    <label><b>Descriere</b></label>
                                    <textarea class="form-control" rows="4" placeholder="descriere" required style="resize: none;" name="descriere"></textarea>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <!-- <a class="btn btn-primary" href="admin_actionPet.php" id="save" type="submit">Salveaza</a> -->
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