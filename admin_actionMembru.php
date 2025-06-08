<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Membru</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume</b></label>
                                    <input class="form-control" placeholder="nume">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Prenume</b></label>
                                    <input class="form-control" placeholder="prenume">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Email</b></label>
                                    <input class="form-control" placeholder="email">
                                </div>
                                
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="uploadPozaProfil"></label><b>Poze:</b></label>
                                    <input type="file" class="form-control-file" id="uploadPozaProfil" multiple> 
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="startDate"><b>Data alaturarii</b></label>
                                    <input id="startDate" class="form-control" type="date" />
                                </div>
                                <div class="col-sm-12 col-lg-12 actionPet">
                                    <label><b>Descriere</b></label>
                                    <textarea class="form-control" rows="4" placeholder="descriere" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <a class="btn btn-primary" href="admin_usersMembers.php" id="save">Salveaza</a>
                                    <a class="btn btn-secondary" href="admin_usersMembers.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>