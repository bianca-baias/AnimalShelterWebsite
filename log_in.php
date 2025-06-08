<?php require "header.php" ?>



        <main>
            <div class="container-fluid d-flex justify-content-center">
                <form class="" method="post" action="includes/login.inc.php">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-lg-12 col-form-label">Email</label>
                        <div class="col-lg-12">
                            <input type="input" class="form-control" id="colFormLabel" placeholder="introduceti email-ul" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class=" col-lg-12 col-form-label">Parola</label>
                        <div class="col-lg-12">
                            <input type="password" class="form-control" id="colFormLabel" placeholder="introduceti parola" name="parola">
                        </div>
                    </div>
                    <div class="form-group row" style = "text-align: center;">
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" id="save" name ="login-submit"> Log in</button>
                        </div>
                        <div class="col-lg-12" style = "text-align: center;">
                            <a class="btn btn-primary" href="forgot_password.html" id="forgotPasswordButton" >Am uitat parola</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12" style = "text-align: center;">
                            <label for="signUpButton">Nu ai cont? Creeaza unul</label>
                        </div>
                        <div class="col-lg-12" style = "text-align: center;">
                            <a class="btn btn-primary" href="sign_up.php" id="signUpButton" >Sign up</a>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        


<?php require "footer.php"?>