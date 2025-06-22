<?php  require "header_logged.php"?>

        <main>
            <div class="container-fluid d-flex justify-content-center">
                <form action="" method="GET" id="fp-form">
                    <div class="row">
                        <label for="colFormLabel" class="col-lg-12 col-form-label">Email</label>
                        <div class="col-lg-12">
                            <input class="form-control" id='fp-email' placeholder="introduceti email-ul">
                        </div>
                        <div class="col-lg-12" id='fp-error' style="color:red;"></div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <button class = "btn btn-primary" class="submit" id="resetPasswordButton">Resetetaza parola</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </main>
        
<?php  require "footer.php"?>