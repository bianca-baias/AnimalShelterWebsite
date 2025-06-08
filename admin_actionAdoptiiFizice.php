<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Adoptie fizica</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form method="post" action="includes/admin/addadoptiefizica.inc.php">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID pet</b></label>
                                    <input class="form-control" placeholder="id" name="id_pet" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID adoptator*</b></label>
                                    <input class="form-control" placeholder="optional" name="id_user">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Nume adoptator</b></label>
                                    <input class="form-control" placeholder="nume" name="nume" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Prenume adoptator</b></label>
                                    <input class="form-control" placeholder="prenume" name="prenume" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Email</b></label>
                                    <input class="form-control" placeholder="email" name="email" required>
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="startDate"><b>Data adoptiei</b></label>
                                    <input id="startDate" class="form-control" type="date" name="data_adoptie" required/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <button class="btn btn-primary" type="submit" id="save">Salveaza</button>
                                    <a class="btn btn-secondary" href="admin_adoptiiFizice.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>