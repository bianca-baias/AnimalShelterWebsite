<?php  require "header_logged.php"?>


        <main>
            <div class="container-fluid">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Adoptie distanta</b></h5></div></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-4">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID pet</b></label>
                                    <input class="form-control" placeholder="id">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>ID user</b></label>
                                    <input class="form-control" placeholder="id">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label><b>Perioada (luni)</b></label>
                                    <input class="form-control" placeholder="nr. luni">
                                </div>
                                <div class="col-sm-12 col-lg-6 actionPet">
                                    <label for="startDate"><b>Data adoptiei la distanta</b></label>
                                    <input id="startDate" class="form-control" type="date" />
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-lg-12">
                                    <a class="btn btn-primary" href="admin_adoptiiDistanta.php" id="save">Salveaza</a>
                                    <a class="btn btn-secondary" href="admin_adoptiiDistanta.php" id="cancel">Anuleaza</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>
        
<?php  require "footer.php"?>
