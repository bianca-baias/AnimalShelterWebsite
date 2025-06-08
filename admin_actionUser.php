<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid" id="signUpForm">
                <div class="row"> <div class="col-sm-12 col-md-10 col-lg-12 text-center"> <h5 style="color: #ae1d1d;"><b>Utilizator</b></h5></div></div>

                <form>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="email">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPassword">Parola</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="parola">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputNume">Nume</label>
                            <input type="text" class="form-control" id="inputNume" placeholder="nume">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPrenume">Prenume</label>
                            <input type="text" class="form-control" id="inputPrenume" placeholder="prenume">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="uploadPozaProfil"></label>Poza profil: </label>
                            <input type="file" class="form-control-file" id="uploadPozaProfil"> 
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 col-lg-12">
                                <a class="btn btn-primary" href="admin_usersCustomers.php" id="save">Salveaza</a>
                                <a class="btn btn-secondary" href="admin_usersCustomers.php" id="cancel">Anuleaza</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </main>
        
<?php  require "footer.php"?>