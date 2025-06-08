<?php require "header.php"?>

        <main>
            <div class="container-fluid" id="signUpForm">
                <form class="signup-form" action="includes/signup.inc.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name = "email" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="parola" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputNume">Nume</label>
                            <input type="text" class="form-control" id="inputNume" name="nume" placeholder="nume" required>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPrenume">Prenume</label>
                            <input type="text" class="form-control" id="inputPrenume" name="prenume" placeholder="prenume" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="uploadPozaProfil"></label>Poza profil: </label>
                            <input type="file" class="form-control-file" name="poza" id="uploadPozaProfil"> 
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 col-lg-12">
                            <button class="btn btn-primary" id="save" type="submit" name="signup-submit">Creeaza cont</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </main>
        
<?php require "footer.php"?>
