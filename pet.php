<?php  require "header_logged.php"?>

        <main>
            <div class="container-fluid text-center pet-row">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active slider-pet">
                                    <img src="Images/adoption/a1-1.jpg" class="img-fluid mx-auto h-100" alt="pet-image">
                                </div>
                                <div class="carousel-item slider-pet">
                                    <img src="Images/adoption/a1-2.jpg" class="img-fluid mx-auto h-100" alt="pet-image">
                                </div>
                                <div class="carousel-item slider-pet">
                                    <img src="Images/adoption/a1-3.jpg" class="img-fluid mx-auto h-100" alt="pet-image">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="vstack">
                            <div class="p-2 pet-description">  
                                <h4>Descriere</h4> <br>
                                <b>Nume:</b> Toto <br>
                                <b>Sex:</b> mascul <br> 
                                <b>Varsta:</b> 3 ani  <br>
                                <b>Timp in adapost:</b> 19 luni  <br> 
                                <b>Temperament:</b> prietenos <br> 
                                <b>Povestea lui:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <a href="#" class="btn btn-primary w-100" id="adopta-button">Adopta</a>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <a href="favorite.php" class="btn btn-primary w-100" id="favorite-button">Adauga la favorite</a>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <a href="#" class="btn btn-primary w-100" id="distance-button">Adopta la distanta</a>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <a href="#" class="btn btn-primary w-100" id="foster-button">Foster</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 pet-description">
                        
                        <h5 style="text-align: center;">Adopta la distanta</h4>
                        <p>Nu ai timpul, programul și spațiul necesare pentru a avea un câine, dar vrei totuși să faci o faptă bună? Ce-ai zice de un câine care formal e al tău, dar de care nu trebuie să te ocupi deloc? <br>
                            Opteaza pentru adopția la distanță. Dacă nu poți să ai un câine lângă tine, poți să ai unul în suflet, pe care să-l consideri al tău. <br>
                            Deși situația nu e ideală, deoarece câinele respectiv ar rămâne în adăpost, o donație lunară făcută pentru un câine reprezintă un ajutor extrem de important atât pentru acel câine, cât și pentru ceilalți.
                        </p>
                    </div>  
                    <div class="col-sm-12 col-md-6 col-lg-6 pet-description">
                        <h5>Foster</h5>
                        <p>Gazduieste temporar un suflet, salvat de pe stradă sau din condiții de trai improprii, până când acesta își va găsi o familie definitivă. <br>
                            Asociațiile de protecție a animalelor au nevoie de cazări temporare pentru a putea salva cât mai multe animale aflate în suferință. <br>
                            Experiența de părinte adoptiv temporar este una plină de satisfacții și provocări și oricine se poate bucura de ea. </p>
                    </div> 
                </div>
            </div>
        </main>
        
<?php  require "footer.php"?>