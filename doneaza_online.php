<?php  require "header_logged.php"?>

        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="row">
                            <div class="col" style="text-align: center;">
                                <h5 style="color: #ae1d1d;"><b>Ajuta sufletele din adapostul de caini din Baia Mare</b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div id="carouselDonate" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"  id="carousel-donate">
                                        <img src="Images/donate-0.jpg" class="d-block w-100" alt="sadDog" id="img-carousel-donate">
                                    </div>
                                    <div class="carousel-item"  id="carousel-donate">
                                        <img src="Images/donate-1.jpg" class="d-block w-100" alt="sadDog"  id="img-carousel-donate">
                                    </div>
                                    <div class="carousel-item"  id="carousel-donate">
                                        <img src="Images/donate-2.jpg" class="d-block w-100" alt="sadDog"  id="img-carousel-donate">
                                    </div>
                                    <div class="carousel-item"  id="carousel-donate">
                                        <img src="Images/donate-3.jpg" class="d-block w-100" alt="sadDog"  id="img-carousel-donate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card ">
                                    <div class="card-header" style="text-align: center;">
                                        <b>Doneaza direct in contul asociatiei</b>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>SWIFT:</b> BTRLRO22XXX</p>
                                        <p class="card-text"><b>IBAN cont lei: </b>  RO71BTRLRONCRT0000000000  </p>
                                        <p class="card-text"><b>IBAN cont euro: </b>  RO71BTRLEURCRT0000000000 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col" style="text-align: center;">
                                <h5><b style="color: #ae1d1d;">Doneaza online</b></h5>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8" id="form-doneaza">
                                <form>
                                    <div class="row">
                                        <label for="form-check"><b>Alegeti o suma:</b></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                            <label class="form-check-label" for="radioDefault1">
                                                20
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                                            <label class="form-check-label" for="radioDefault2">
                                                50
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                                            <label class="form-check-label" for="radioDefault2">
                                                100
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label><b>Sau introduceti suma: </b></label>
                                        <input type="suma" class="form-control" placeholder="lei">
                                    </div>

                                    <div class="row">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault">
                                            <label class="form-check-label" for="switchCheckDefault"><i>Activeaza plata lunara automata </i> <i class="bi bi-heart-fill" style="color: #ae1d1d;"></i> </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label><b>Nume</b></label>
                                        <input type="email" class="form-control" placeholder="nume">
                                    </div>
                                    <div class="row">
                                        <label><b>Prenume</b></label>
                                        <input type="email" class="form-control" placeholder="prenume">
                                    </div>
                                    <div class="row">
                                        <label><b>Email</b></label>
                                        <input type="email" class="form-control" placeholder="email">
                                    </div>

                                    <div class="row" >
                                        <div class="col" style="text-align: center;">
                                            <button class="btn btn-primary" id="donate">Doneaza</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label>Veti fi redirectionat catre pagina de plata</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
<?php  require "footer.php"?>