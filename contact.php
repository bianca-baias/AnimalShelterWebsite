<?php  require "header.php"?>

        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-4">
                        <div class="card card-contact">
                            <div class="card-header">
                                <b>Info contact</b>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><b>Email:</b> adapostuldecainibaiamare@yahoo.com </p>
                                <p class="card-text"><b>Telefon:</b> 0743114488  </p>
                                <p class="card-text"><b>Adresa:</b> Baia Mare, Strada Iazului, Nr. 2 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="row justify-content-center text-center">
                            <h5 style="color: #ae1d1d;"><b>Trimite un mesaj</b></h5>
                        </div>
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-lg-4">
                                        <label for="inputEmail"><b>Email</b></label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <label for="inputNume"><b>Nume</b></label>
                                        <input type="text" class="form-control" id="inputNume" placeholder="nume">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-lg-8">
                                            <label><b>Mesaj</b></label>
                                            <textarea class="form-control" rows="4" placeholder="mesaj" required style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center">
                                    <div class="col-sm-12 col-lg-8">
                                        <button type="button" id= "send" style="font-size: medium;" class="btn btn-lg btn-danger" id="popover" data-bs-trigger="focus" data-bs-toggle="popover" data-bs-title="Mesaj trimis" data-bs-content="Veti primi un raspuns in cel mai scurt timp">Trimite</button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
                
            </div>
        </main>
        
        <footer>
            <div class="footer container-fluid text-center">
                <div class="row">
                    <div class="col-sm">
                        <img src="Images/logo.png" alt="logo" id="logo"> <br> Adapostul de animale Baia Mare
                    </div>
                    <div class="col-sm">
                        <b>Sponsori:</b>
                        <img src="Images/sp1.png" alt="sponsor1" id="sp">
                        <img src="Images/sp2.png" alt="sponsori" id="sp">
                        <img src="Images/sp3.png" alt="sponsori" id="sp">
                    </div>
                    <div class="col-sm">
                        <b>Contact</b><br>
                        <i>Telefon:</i> 0743114488 <br>
                        <i>Email:</i> adapostuldecainibaiamare@yahoo.com <br>
                        <i>Adresa:</i> Baia Mare, Strada Iazului, Nr. 2 
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
        const popover = new bootstrap.Popover('.popover-dismiss', {
                                                                trigger: 'focus'
                                                                })
    </script>
    </body>
</html>